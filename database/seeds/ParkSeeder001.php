<?php

use Illuminate\Database\Seeder;

class ParkSeeder001 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parks')->insert([
        	[
        	'id'=>111111,
            'vehicle_type' => 'Normal Car',
            'park_address' => 'Flat parking Kizukawa,
							   1 Chome-5-19,
							   Kizugawa, 
							   Naniwa-ku, 
							   Osaka-shi,
							   Osaka-fu
							   556-0027',
            'park_lat' 	   => 34.665868, 
            'park_lon'	   =>135.482827,
            'capacity'     =>9,
            'contact_no'   =>null,
            'owner_id'     =>null,
            'active'       =>1
        	],
        	[
        	'id'=>111112,
            'vehicle_type' => 'Normal Car',
            'park_address' => 'JPM Kirindo Shin-Osaka Miyahara store parking lot,
							   4 Chome-2-21,
							   Miyahara,
							   Yodogawa-ku, 
							   Ōsaka-shi, 
							   Ōsaka-fu 
							   532-0003',
            'park_lat' => 34.735270, 
            'park_lon'=> 135.494784,
            'capacity'=>6,
            'contact_no'=>null,
            'owner_id'=>null,
            'active'=>1
        	],
        	[
        	'id'=>111113,
            'vehicle_type' => 'Normal Car',
            'park_address' => 'JPM Seiyu Green Bridge Store Parking Lot,
							   3 Chome-1-2,
							   Higashiimazato,
							   Higashinari-ku, 
							   Ōsaka-shi, 
							   Ōsaka-fu 
							   537-0011 ',
            'park_lat' => 34.677351, 
            'park_lon'=>135.549399,
            'capacity'=>20,
            'contact_no'=>null,
            'owner_id'=>null,
            'active'=>1
        	],
        	[
        	'id'=>111114,
            'vehicle_type' => 'Normal Car',
            'park_address' => 'Superjpm Mother Bros,
							   1 Chome-6-1,
							   Senbanishi,
							   Minoo-shi, 
							   Ōsaka-fu 
							   562-0036 ',
            'park_lat' => 34.825257, 
            'park_lon'=>135.487822 ,
            'capacity'=>50,
            'contact_no'=>null,
            'owner_id'=>null,
            'active'=>1
        	]
        ]);
    }
}
