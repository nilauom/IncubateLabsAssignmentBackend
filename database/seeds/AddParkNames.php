<?php

use Illuminate\Database\Seeder;

class AddParkNames extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parks')->where('id',111111)->update(['name'=>'Flat parking Kizukawa']);
        DB::table('parks')->where('id',111112)->update(['name'=>'JPM Kirindo Shin-Osaka Miyahara store parking lot']);
        DB::table('parks')->where('id',111113)->update(['name'=>'JPM Seiyu Green Bridge Store Parking Lot']);
        DB::table('parks')->where('id',111114)->update(['name'=>'Superjpm Mother Bros']);
    }
}
