<?php

namespace App;

class Photo extends Model
{
    public function scopeNonDeleted ($query)
    {
    	return $query->where('deleted', 0);
    }
    public function rates ()
    {
    	return $this->hasMany(Rate::class);
    }

    // return collection of photos rated by user
    public static function ratedPhotos ($userId)
    {
        return \DB::table('photos')
                    ->join('rates', 'photos.id', '=', 'rates.photo_id')
                    ->join('users', 'users.id', '=', 'rates.user_id')
                    ->select('photos.*', 'rates.rate')
                    ->where('users.id', '=', $userId)
                    ->where('rates.rate', '<>', 0)
                    ->get();
    }

    // return next photo that is not yet rated by user
    public static function nextPhoto ($userId)
    {
        $ratedPhotos = static::ratedPhotos($userId);
        $ratedPhotoIds = [];
        foreach ($ratedPhotos as $ratedPhoto) {
            $ratedPhotoIds[] = $ratedPhoto->id;
        }
        return \DB::table('photos')
                    ->whereNotIn('id', $ratedPhotoIds)
                    ->first();
    }

    // check if photo is rated by user yet
    public static function isRated ($photoId, $userId)
    {
        return \DB::table('rates')
        			->where('rates.photo_id', '=', $photoId)
                    ->where('rates.user_id', '=', $userId)
                    ->where('rates.rate', '<>', 0)
                    ->count();
    }
}
