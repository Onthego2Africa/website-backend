<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

/**
 * @group FAQ APIs
 *
 * Apis for managing event resource
 * @return \Illuminate\Http\Response
 */

class FaqController extends Controller
{
    /**
     * GET /faqs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();

        $response = [
            'faqs' => $faqs
        ];

        return response($response, 200);
    }

    /**
     * POST /faqs
     * 
     * @bodyParam title string required 
     * @bodyParam content string required 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'string|required',
            'content' => 'required',
        ]);

        $faq = Faq::create($fields);

        $response = [
            'faq' => $faq,
        ];

        return response($response, 201);
    }

    /**
     * GET /faqs/id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);

        if (!$faq) {
            abort(404, 'Not Found');
        }

        $response = [
            'faq' => $faq
        ];

        return response($response, 200);
    }

    /**
     * PUT /faqs/id
     *
     * @bodyParam title string required 
     * @bodyParam content string required 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);

        $fields = $request->validate([
            'title' => 'string|required',
            'content' => 'required',
        ]);

        $faq->update($fields);

        $response = [
            'faq' => $faq,
        ];

        return response($response, 201);
    }

    /**
     * DELETE /faqs
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $faq = Faq::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $faq->delete();

        return response(['message' => 'FAQs deleted succesfully']);
    }
}
