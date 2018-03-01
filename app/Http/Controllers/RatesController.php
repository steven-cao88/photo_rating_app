<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use App\Photo;
use App\User;

class RatesController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth');
    }
	public function like ($photoId)
	{
        // make sure user can't rate photo again
        if (Photo::isRated($photoId, auth()->id())) {
            return back()->withErrors([
                'message' => 'You rated this photo before.'
            ]);
        }

        // store rating
		$this->store($photoId, 1);
        
        // direct to next photo that is not yet rated
        $nextPhoto = Photo::nextPhoto(auth()->id());
        if ($nextPhoto) {
            return redirect('/photos/' . $nextPhoto->id);
        }
		return redirect()->home();
	}

	public function dislike ($photoId)
	{
        // make sure user can't rate photo again
        if (Photo::isRated($photoId, auth()->id())) {
            return back()->withErrors([
                'message' => 'You rated this photo before.'
            ]);
        }

        // store rating
		$this->store($photoId, -1);

        // direct to next photo that is not yet rated
		$nextPhoto = Photo::nextPhoto(auth()->id());
        if ($nextPhoto) {
            return redirect('/photos/' . $nextPhoto->id);
        }
        return redirect()->home();
	}

    private function store ($photoId, $rating = 0)
    {
    	$existingRate = Rate::where('photo_id', '=', $photoId)
    	->where('user_id', '=', auth()->id())
    	->first();

    	if ($existingRate) {
    		// update existing rate
    		$existingRate->rate = $rating;
    		$existingRate->save();
    	} else {
    		// create new rate
    		$rate = Rate::create([
    			'user_id' => auth()->id(),
    			'photo_id' => $photoId,
    			'rate' => $rating
    		]);
    	}
    }
}
