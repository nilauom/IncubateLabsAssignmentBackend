<?php

use Illuminate\Database\Seeder;

class ParkSeeder002 extends Seeder
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
        	'id'=>01,
            'vehicle_type' => 'Normal Car',
            'park_address' => 'Majestic City,
							   10,
							   Station Rd, 
							   Colombo',
            'park_lat' 	   => 6.894447, 
            'park_lon'	   =>79.855033,
            'capacity'     =>20,
            'contact_no'   =>null,
            'owner_id'     =>null,
            'active'       =>1
        	],
        	[
        	'id'=>02,
            'vehicle_type' => 'Normal Car and Normal Lorry',
            'park_address' => 'Diyatha Uyana,
							   Sri Jayawardenepura Mawatha,
							   Sri Jayawardenepura,
							   Kotte',
            'park_lat' => 6.904064, 
            'park_lon'=> 79.911068,
            'capacity'=> 39,
            'contact_no'=>null,
            'owner_id'=>null,
            'active'=>1
        	],
        ]);
    }
}
