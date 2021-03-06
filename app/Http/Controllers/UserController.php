<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * Retrieve ALL the users.
     */
    public function fetchAll ()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Retrieve ONE user (by ID.)
     */
    public function fetchOne ( Request $request, $id )
    {
        $user = User::findOrFail( $id );
        return $user;
    }

    /**
     * Update a user's name.
     */
    public function updateUserName ( Request $request, $id )
    {
        // Retrieve the user.
        $user = User::findOrFail( $id );
        // Update their name.
        $user->name = $request->name;
        // Save the changes to the database.
        $user->save();
        // Return success (the updated user.)
        return $user;
    }
}
