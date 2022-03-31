<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTravel = new Travel();
        $newTravel->location = 'Maiorca';
        $newTravel->accomodation = 'Hsm Canarios Park';
        $newTravel->flight_from = 'Milano';
        $newTravel->period = '8 Giorni e 7 Notti';
        $newTravel->accomodation_rating = 3;
        $newTravel->formula = 'All Inclusive';
        $newTravel->travel_insurance = true;
        $newTravel->price = 245;
        $newTravel->direct_flight = true;
        $newTravel->save();
    }
}
