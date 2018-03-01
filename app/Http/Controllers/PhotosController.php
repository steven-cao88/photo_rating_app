<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function index ()
    {
    	$photos = Photo::nonDeleted()->latest()->get();
    	return view('photos.index', compact('photos'));
    }
    public function show (Photo $photo)
    {
		return view('photos.show', compact('photo'));
    }
}
