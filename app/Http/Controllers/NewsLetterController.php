<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * @group NewsLetter APIs
 *
 * Apis for managing newsletter resource
 * @return \Illuminate\Http\Response
 */

class NewsLetterController extends Controller
{
    /**
     * GET /newsletter
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::pluck('email')->toArray();

        $response = [
            'newsletters' => $newsletters
        ];

        return response($response, 200);
    }

    /**
     * POST /newsletter-subscribe
     * 
     * @bodyParam email string required 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'email', Rule::unique('newsletters', 'email')],
        ]);

        $newsletter = Newsletter::create($fields);

        $response = [
            'message' => 'Subscribed to Newsletter successfully',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * DELETE /newsletter
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
