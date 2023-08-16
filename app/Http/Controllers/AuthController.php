<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

/**
 * @group Auth Management
 *
 * Apis for managing user resource
 * @return \Illuminate\Http\Response
 */
class AuthController extends Controller
{

    /**
     * GET Users
     *
     * Get a list of all users
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
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
     * POST /register
     * 
     * Store a newly created user in storage.
     *
     * @bodyParam name string required 
     * @bodyParam username string required 
     * @bodyParam email string required
     * @bodyParam password string required
     * @bodyParam password_confirmation string required
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResource App\Http\Resources\UserResource
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
     * Send Verify Email Link
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam email string required
     * @return \Illuminate\Http\Response
     */
    public function sendVerificationEmail(Request $request)
    {
        $user = User::where('email', $request['email'])->first();

        if (!$user) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        $user->sendEmailVerificationNotification();
    }


    /**
     * Verify Email
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function verify(EmailVerificationRequest $request)
    public function verify(Request $request, $id)
    {

        $user = User::find($id);

        if ($user->email_verified_at) {
            // return 'Link already used';
            return view('welcome');
        }

        // return $request->user();    
        // $request->user()->markEmailAsVerified();
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
            return view('welcome');
        }

        // event(new Verified($request->user()));

        // return response('Your email is verified, You can log in', 200);
    }

    /**
     * GET /profile
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            abort(403, 'Unauthorized Action');
        }

        // $rateCards = User::where('user_id', $user->id)->get();
        $rateCards = $user->ratecards;

        $response = [
            'user' => $user
        ];

        return response($response, 200);
    }

    /**
     * PUT /users
     * 
     * Update the user in storage.
     *
     * @bodyParam name string required 
     * @bodyParam username string required 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @apiResource App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // $authenticatedUser = $request->user();
        // check if logged in user is authorized
        // if ($request->user()->id != $id) {
        //     abort(403, 'Unauthorized Action');
        // }
        $user = $request->user();

        $fields = $request->validate([
            'name' => ['required'],
            // 'email' => ['required', 'email'],
            'username' => ['required']
        ]);

        // if ($fields['email'] != $user['email']) {
        //     $request->validate(['email' =>  Rule::unique('users', 'email')]);
        // }

        if ($fields['username'] != $user['username']) {
            $request->validate(['username' =>  Rule::unique('users', 'username')]);
        }


        // return $user['instagram'];
        $user->update([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'about' => ($request['about'] != 'null' ? $request['about'] : $user['about']),
        ]);

        $response = [
            'user' => $user,
        ];

        return response($response, 201);
    }

    /**
     * Login User.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        // check email
        $user = User::where('email', $fields['email'])->first();

        // check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('webapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    /**
     * Logout User.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response(['message' => 'Logged out successfully']);
    }

    /**
     * Send Password Reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return [
                'status' => __($status)
            ];
        }
        // else {
        //     return 'Error';
        // }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }

    /**
     * DELETE /users
     * 
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
