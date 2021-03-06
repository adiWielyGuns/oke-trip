<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itinerary_destination extends Model
{
    protected $table = 'itinerary_destination';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $remember_token = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
 
    protected $fillable = [
							'id','dt', 'destination_id'
    					];

    public function destination()
    {
    	return $this->belongsTo('App\destination', 'destination_id', 'id');
    }


    public function itinerary()
    {
    	return $this->belongsTo('App\itinerary', 'id', 'id');
    }
}
