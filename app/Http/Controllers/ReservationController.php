<?php

namespace App\Http\Controllers;

use App\Mail\NewReservationMail;
use App\Mail\ThanksReservationMail;
use App\Models\Event;
use App\Models\Package;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * @group Booking APIs
 *
 * Apis for managing reservation resource
 * @return \Illuminate\Http\Response
 */

class ReservationController extends Controller
{
    /**
     * GET /reservations
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reservations = Reservation::all();
        // $reservations = Reservation::where('user_id', $request->user()->id)::with('events')->get();
        // $reservations = Reservation::where('user_id', $request->user()->id)::with('tours')->get();

        $response = [
            'reservations' => $reservations
        ];

        return response($response, 200);
    }

    /**
     * POST /book-event
     * 
     * @bodyParam check_in string 
     * @bodyParam check_out string 
     * @bodyParam cost string required
     * @bodyParam paymentID string
     * @bodyParam package_id string required
     * @bodyParam plan_name string required
     * @bodyParam plan_price string required
     * @bodyParam plan_quantity string required
     * @bodyParam name string required
     * @bodyParam email string required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEventBooking(Request $request, $id)
    {
        $fields = $request->validate([
            // 'check_in' => 'string|required',
            // 'check_out' => 'required',
            'cost' => 'required',
            // 'paymentID' => 'required',
            'package_id' => 'required',
            'plan_name' => 'required',
            'plan_price' => 'required',
            'plan_quantity' => 'required',
            'name' => 'required',
            'email' => 'email|required'
        ]);

        $fields['event_id'] = $id;

        $ticket_id = 'T-' . random_int(10000, 99999);

        //Just do the query how ever you want, this is totally generic

        while (Reservation::where('ticket_id', $ticket_id)->first()) {
            $ticket_id = 'T-' . random_int(10000, 99999);
        }

        $fields['ticket_id'] = $ticket_id;

        $event = Event::find($id);

        $package = Package::find($fields['package_id']);

        $reservation = Reservation::create($fields);

        $response = [
            'reservation' => $reservation,
        ];

        $reservation['event'] = $event['title'];
        $reservation['package'] = $package['title'];

        Mail::to('info@onthego2africa.com')->send(new NewReservationMail($reservation));

        Mail::to($fields['email'])->send(new ThanksReservationMail($reservation));

        // return response()->json(['message' => 'Email sent successfully']);

        return response($response, 201);
    }

    /**
     * POST /book-tour
     * 
     * @bodyParam number_of_guests string required 
     * @bodyParam check_in string required 
     * @bodyParam check_out string required 
     * @bodyParam cost string required
     * @bodyParam paymentID string required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTourBooking(Request $request, $id)
    {
        $fields = $request->validate([
            'number_of_guests' => 'string|required',
            'check_in' => 'string|required',
            'check_out' => 'required',
            'cost' => 'required',
            'paymentID' => 'required',
        ]);

        $fields['tour_id'] = $id;

        $reservation = Reservation::create($fields);

        $response = [
            'reservation' => $reservation,
        ];

        return response($response, 201);
    }

    /**
     * GET /reservations/id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            abort(404, 'Not Found');
        }

        $package = Package::find($id);

        if (!$package) {
            abort(404, 'Not Found');
        }

        $reservation->tour;

        $reservation->event;

        $reservation['package'] = $package;

        $response = [
            'reservation' => $reservation
        ];

        return response($response, 200);
    }

    /**
     * PUT /reservations/id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $reservation = Reservation::find($id);

        $fields = $request->validate([
            'number_of_guests' => 'string|required',
            'check_in' => 'string|required',
            'check_out' => 'required',
            'cost' => 'required',
            'paymentID' => 'required',
            'package_id' => 'required',
            'name' => 'required'
        ]);

        $fields['tour_id'] = $request['tour_id'];

        $fields['event_id'] = $request['event_id'];

        $reservation->update($fields);

        $response = [
            'reservation' => $reservation,
        ];

        return response($response, 201);
    }

    /**
     * POST /reservations/toggle-paid
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function togglePaid($id)
    {

        $reservation = Reservation::find($id);
        if ($reservation['confirm_paid'] == 'no') {
            $reservation->confirm_paid = 'yes';
        } else {
            $reservation->confirm_paid = 'no';
        }

        $reservation->save();

        $response = [
            'reservation' => $reservation,
        ];

        return response($response, 201);
    }

    /**
     * DELETE /reservations
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $reservation = Reservation::find($id);

        if (!$request->user()) {
            abort(403, 'Unauthorized Action');
        }

        $reservation->delete();

        return response(['message' => 'Reservation deleted succesfully']);
    }
}
