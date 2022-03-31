<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('location', 20);
            $table->string('accommodation', 20);
            $table->string('flight_from', 30);
            $table->string('period', 40);
            $table->smallInteger('accomodation_rating');
            $table->string('formula', 30);
            $table->boolean('travel_insurance');
            $table->decimal('price', 5, 2);
            $table->timestamps();
            //$table->boolean('direct_flight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('travels');
    }
}
