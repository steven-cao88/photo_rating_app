<?php

namespace App;

class Rate extends Model
{
    public function photo ()
    {
    	return $this->belongsTo(Photo::class);
    }
    public function user ()
    {
    	return $this->belongsTo(User::class);
    }
}
