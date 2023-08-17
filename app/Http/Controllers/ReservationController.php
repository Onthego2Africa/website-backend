<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

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
        // $reservations = Reservation::all();
        $reservations = Reservation::where('user_id', $request->user()->id)::with('events')->get();
        $reservations = Reservation::where('user_id', $request->user()->id)::with('tours')->get();

        $response = [
            'reservations' => $reservations
        ];

        return response($response, 200);
    }

    /**
     * POST /book-event
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
    public function storeEventBooking(Request $request, $id)
    {
        $fields = $request->validate([
            'number_of_guests' => 'string|required',
            'check_in' => 'string|required',
            'check_out' => 'required',
            'cost' => 'required',
            'paymentID' => 'required',
        ]);

        $fields['event_id'] = $id;

        $reservation = Reservation::create($fields);

        $response = [
            'reservation' => $reservation,
        ];

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

        $reservation->tour;

        $reservation->event;

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
