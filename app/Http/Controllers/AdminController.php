<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * @group Admin APIs
 *
 * Apis for managing user resource
 * @return \Illuminate\Http\Response
 */

class AdminController extends Controller
{

    /**
     * GET /users
     *
     * Get a list of all users
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function userIndex()
    {
        $users = User::role('user')->get();

        $response = [
            'users' => $users
        ];

        return response($response, 200);
    }

    /**
     * GET /admins
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::role('admin')->get();

        $response = [
            'admins' => $admins
        ];

        return response($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
