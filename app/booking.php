<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $remember_token = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    protected $fillable = [
							'id', 'kode', 'users_id', 'telp', 'itinerary_id', 'status', 'name', 'total_adult', 'total_child', 'total_infant', 'remark', 'total_additional', 'total_room', 'tax', 'visa', 'agent_com', 'tips', 'total', 'total_remain', 'handle_by', 'created_by', 'updated_by', 'created_at', 'updated_at'
    					];

    public function booking_d()
    {
    	return $this->hasMany('App\booking_d', 'id', 'id');
    }

    public function booking_additional()
    {
    	return $this->hasMany('App\booking_additional', 'id', 'id');
    }
}
