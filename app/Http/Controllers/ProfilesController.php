<?php

namespace App\Http\Controllers;

use App\User; //this is needed to use the user class (namespace)
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        
        
        return view('home', [
            'user' => $user,
        ]);
    }
}
