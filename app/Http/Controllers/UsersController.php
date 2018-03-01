<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Photo;

class UsersController extends Controller
{
	public function __construct ()
    {
        $this->middleware('auth');
    }
	
    public function show (User $user)
    {
    	$ratedPhotos = Photo::ratedPhotos($user->id);
		return view('users.show', compact('ratedPhotos'));
    }
}
