<?php

namespace App\Http\Controllers;

use App\User; //this is needed to use the user class (namespace)
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        
        
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
