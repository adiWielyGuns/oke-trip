<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItineraryDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerary_detail', function ($table) {
            $table->integer('id')->primary();
            $table->integer('dt'); 
            $table->string('code'); 
            $table->integer('seat');
            $table->integer('seat_remain');
            $table->date('start');
            $table->date('end');
            $table->double('adult_price', 10, 2);
            $table->double('child_price', 10, 2);
            $table->double('child_bed_price', 10, 2);
            $table->double('infant_price', 10, 2);
            $table->double('minimal_dp', 10, 2);
            $table->double('agent_com', 10, 2);
            $table->double('agent_tip', 10, 2);
            $table->double('agent_visa', 10, 2);
            $table->double('agent_tax', 10, 2);
            $table->string('final_pdf');
            $table->string('term_pdf');
            $table->string('flayer_jpg');
            $table->string('tour_leader_id');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerary_detail');
    }
}