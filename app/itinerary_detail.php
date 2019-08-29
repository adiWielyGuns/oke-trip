<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itinerary_detail extends Model
{
    
    protected $table = 'itinerary_detail';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $remember_token = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    protected $fillable = [
							'id', 'dt', 'code', 'seat', 'seat_remain', 'start', 'end', 'adult_price', 'child_price', 'child_bed_price', 'infant_price', 'minimal_dp', 'agent_com', 'agent_tip', 'agent_visa', 'agent_tax', 'final_pdf', 'term_pdf', 'flayer_jpg', 'tour_leader_id','tour_leader_tips', 'created_by', 'updated_by', 'created_at', 'updated_at'
    					];


    public function booking()
    {
    	return $this->hasMany('App\booking', 'itinerary_code', 'id');
    }
}
