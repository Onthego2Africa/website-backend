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
     * POST /admins
     * 
     * Store a newly created admin in storage.
     *
     * @bodyParam name string required 
     * @bodyParam username string required 
     * @bodyParam email string required
     * @bodyParam password string required
     * @bodyParam password_confirmation string required
     *
     * @param  \Illuminate\Http\Request  $request
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

        $user->assignRole('admin');

        $user->sendEmailVerificationNotification();

        $response = [
            'admin' => $user,
        ];

        return response($response, 201);
    }

    /**
     * GET /admin/id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = $request->user();

        if (!$user) {
            abort(403, 'Unauthorized Action');
        }

        $response = [
            'admin' => $user
        ];

        return response($response, 200);
    }

    /**
     * PUT /admins
     * 
     * Update the admin in storage.
     *
     * @bodyParam name string required 
     * @bodyParam username string required 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $request->user();

        if($user->getRoleNames()[0] == 'super-admin'){
        } elseif ($request->user()->id != $user->id) {
            abort(403, 'Unauthorized Action');
        }

        $fields = $request->validate([
            'name' => ['required'],
            'username' => ['required']
        ]);

        if ($fields['email'] != $user['email']) {
            $request->validate(['email' =>  Rule::unique('users', 'email')]);
        }

        if ($fields['password']) {
            $request->validate( ['password' => 'required|confirmed|min:8']);
        }

        if ($fields['username'] != $user['username']) {
            $request->validate(['username' =>  Rule::unique('users', 'username')]);
        }

        $user->update([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
                    'password' => bcrypt($fields['password']),
        ]);

        $response = [
            'admin' => $user,
        ];

        return response($response, 201);
    }

    /**
     * Remove the Admin from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = User::find($id);

        if($user->getRoleNames()[0] == 'super-admin'){
        } elseif ($request->user()->id != $user->id) {
            abort(403, 'Unauthorized Action');
        }

        $user->delete();

        return response(['message' => 'Admin deleted succesfully']);
    }
}
