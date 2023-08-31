<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

/**
 * @group Tour APIs
 *
 * Apis for managing event resource
 * @return \Illuminate\Http\Response
 */

class TourController extends Controller
{
    /**
     * GET /tours
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::with('images')->get();
        $response = [
            'tours' => $tours
        ];

        return response($response, 200);
    }

    /**
     * POST /tours
     * 
     * @bodyParam title string required 
     * @bodyParam cover_image file required 
     * @bodyParam overview string required 
     * @bodyParam itenary string required
     * @bodyParam cost string required
     * @bodyParam images[] array required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResourceModel App\Models\Tour
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'string|required',
            'overview' => 'string|required',
            'itenary' => 'required',
            'cost' => 'required',
        ]);

        $request->validate(['cover_image' => 'required|image:jpeg,png,jpg,gif']);
        $fields['cover_image'] = env("APP_URL", "http://127.0.0.1:8000"). "/storage/" .  $request->file('cover_image')->store('cover_images', 'public');

        $tour = Tour::create([
            'title' => $fields['title'],
            'slug' => Str::slug($fields['title'], '-'),
            'overview' => $fields['overview'],
            'itenary' => $fields['itenary'],
            'cost' => $fields['cost'],
            'cover_image' => ($request->hasFile('cover_image') ? $fields['cover_image'] : null)
        ]);

        
        $imageUrls = [];

        foreach ($request->file('images') as $image) {
            // $path = $image->store('feature_images', 'public'); // Store image and get the path
            // $imageUrl = Storage::url($path); // Get URL for the stored image
            $imageUrl = 'http://127.0.0.1:8000/storage/' . $request->file('cover_image')->store('feature_images', 'public');
            $imageUrls[] = $imageUrl;
        }

        // Attach the image URLs to the product
        foreach ($imageUrls as $imageUrl) {
            $tour->images()->create([
                'url' => $imageUrl,
            ]);
        }

        $tour->images;

        $response = [
            'tour' => $tour,
        ];

        return response($response, 201);
    }

    /**
     * GET /tours/slug
     *
     * Fetch tour with slug
     * 
     * @response 200 {
     * "tour":  {
     *      "id": 1,
     *      "title": "dgs",
     *      "slug": "dgs",
     *      "cover_image": "http:\/\/127.0.0.1:8000\/storage\/cover_images\/lheicfYAjrZTfqlbDutpqUIpS9ueefojUyYDsDYx.jpg",
     *      "overview": "skflalkjflfkj",
     *      "itenary": "dsfsf",
     *      "cost": "dsf",
     *      "created_at": "2023-08-16T14:11:19.000000Z",
     *      "updated_at": "2023-08-16T14:11:19.000000Z",
     *      "images": []
     *  }
     * }
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tour = Tour::where('slug', $slug)->first();

        if (!$tour) {
            abort(404, 'Not Found');
        }

        $tour->images;

        $response = [
            'tour' => $tour
        ];

        return response($response, 200);
    }

    /**
     * PUT /tours
     *
     * @bodyParam title string required 
     * @bodyParam cover_image file required 
     * @bodyParam overview string required 
     * @bodyParam itenary string required
     * @bodyParam cost string required
     * @bodyParam images[] array required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $tour = Tour::find($id);

        $fields = $request->validate([
            'title' => 'string|required',
            'overview' => 'string|required',
            'itenary' => 'required',
            'cost' => 'required',
        ]);

        if ($request->hasFile('cover_image')) {
            $request->validate(['cover_image' => 'required|image:jpeg,png,jpg,gif']);
            $fields['cover_image'] = env("APP_URL", "http://127.0.0.1:8000")."/storage/". $request->file('cover_image')->store('cover_images', 'public');
            if (File::exists(substr($tour['cover_image'],  strlen(env("APP_URL", "http://127.0.0.1:8000"))+1))) {
                File::delete(substr($tour['cover_image'],  strlen(env("APP_URL", "http://127.0.0.1:8000"))+1));
            };
        }

        $tour->update([
            'title' => $fields['title'],
            'slug' => Str::slug($fields['title'], '-'),
            'overview' => $fields['overview'],
            'itenary' => $fields['itenary'],
            'cost' => $fields['cost'],
            'cover_image' => ($request->hasFile('cover_image') ? $fields['cover_image'] : $tour['cover_image'])
        ]);

        $tour->images;

        $response = [
            'tour' => $tour,
        ];

        return response($response, 201);
    }

    /**
     * DELETE /tours
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tour = Tour::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $tour->delete();

        return response(['message' => 'Event deleted succesfully']);
    }
}
