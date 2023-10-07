<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMail;
use App\Mail\ThanksContactMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * @group Contact Form APIs
 *
 * Apis for managing event resource
 * @return \Illuminate\Http\Response
 */

class ContactFormController extends Controller
{
    /**
     * GET /contact-us
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contactForms = ContactForm::all();

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $response = [
            'contactForms' => $contactForms
        ];

        return response($response, 200);
    }

    /**
     * POST /contact-us
     *
     * @bodyParam name string required 
     * @bodyParam email string required 
     * @bodyParam text string required 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'text' => 'required',
        ]);

        $contactForm = ContactForm::create($fields);

        Mail::to('info@onthego2africa.com')->send(new NewContactMail($contactForm));

        Mail::to($fields['email'])->send(new ThanksContactMail($contactForm));

        $response = [
            'contactForm' => $contactForm,
        ];

        return response($response, 201);
    }

    /**
     * GET /contact-us/id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $contactForm = ContactForm::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        if (!$contactForm) {
            abort(404, 'Not Found');
        }

        $response = [
            'contactForm' => $contactForm
        ];

        return response($response, 200);
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
     * DELETE /contact-us
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $contactForm = ContactForm::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $contactForm->delete();

        return response(['message' => 'Contact Form deleted succesfully']);
    }
}
