<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * @group Auth Management
 *
 * Apis for managing user resource
 * @return \Illuminate\Http\Response
 */
class AuthController extends Controller
{

    /**
     * GET /users
     *
     * Get a list of all users
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $response = [
            'users' => $users
        ];

        return response($response, 200);
    }

    /**
     * POST /users
     * 
     * Store a newly created resource in storage.
     *
     * @bodyParam name string required 
     * @bodyParam username string required 
     * @bodyParam email string required
     * @bodyParam password string required
     * @bodyParam password_confirmation string required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResourceModel App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8',
            'username' => ['required', Rule::unique('users', 'username')],
        ]);


        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'username' => $fields['username'],
            'password' => bcrypt($fields['password']),
        ]);

        $user->sendEmailVerificationNotification();

        $response = [
            'user' => $user,
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
