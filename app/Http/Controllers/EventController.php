<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @group Event APIs
 *
 * Apis for managing event resource
 * @return \Illuminate\Http\Response
 */

class EventController extends Controller
{
    /**
     * GET /events
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('images')->get();
        $response = [
            'events' => $events
        ];

        return response($response, 200);
    }

    /**
     * POST /events
     * 
     * @bodyParam title string required 
     * @bodyParam cover_image file required 
     * @bodyParam overview string required 
     * @bodyParam itenary string required
     * @bodyParam cost string required
     * @bodyParam images[] array required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResourceModel App\Models\Event
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
        $fields['cover_image'] = 'http://127.0.0.1:8000/storage/' . $request->file('cover_image')->store('cover_images', 'public');
        // $fields['cover_image'] = 'https://api.ratecard.ly/storage/' . $request->file('cover_image')->store('cover_images', 'public');

        $event = Event::create([
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
        // $imageUrls = $request->input('image_urls');
        foreach ($imageUrls as $imageUrl) {
            $event->images()->create([
                'url' => $imageUrl,
            ]);
        }

        $event->images;

        $response = [
            'event' => $event,
        ];

        return response($response, 201);
    }

    /**
     * GET /events/slug
     *
     * Fetch event with slug
     * 
     * @response 200 {
     * "event":  {
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
        $event = Event::where('slug', $slug)->first();

        if (!$event) {
            abort(404, 'Not Found');
        }

        $event->images;

        $response = [
            'event' => $event
        ];

        return response($response, 200);
    }

    /**
     * PUT /events
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

        $event = Event::find($id);

        $fields = $request->validate([
            'title' => 'string|required',
            'overview' => 'string|required',
            'itenary' => 'required',
            'cost' => 'required',
        ]);

        if ($request->hasFile('cover_image')) {
            $request->validate(['cover_image' => 'required|image:jpeg,png,jpg,gif']);
            $fields['cover_image'] = 'http://127.0.0.1:8000/storage/' . $request->file('cover_image')->store('cover_images', 'public');
            if (File::exists(substr($event['cover_image'], 22))) {
                File::delete(substr($event['cover_image'], 22));
            };
            // $fields['cover_image'] = 'https://api.ratecard.ly/storage/' . $request->file('cover_image')->store('cover_images', 'public');
        }

        $event->update([
            'title' => $fields['title'],
            'slug' => Str::slug($fields['title'], '-'),
            'overview' => $fields['overview'],
            'itenary' => $fields['itenary'],
            'cost' => $fields['cost'],
            'cover_image' => ($request->hasFile('cover_image') ? $fields['cover_image'] : $event['cover_image'])
        ]);

        $event->images;

        $response = [
            'event' => $event,
        ];

        return response($response, 201);
    }

    /**
     * DELETE /events
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $event = Event::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $event->delete();

        return response(['message' => 'Event deleted succesfully']);
    }
}
