<?php

use Illuminate\Database\Seeder;

class ParksInJapanies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parks')->where('id',111111)->update([
            'vehicle_type' => '普通車',
            'name' => 'フラットパーキング木津川',
            'park_address' => '〒556-0027大阪府大阪市浪速区木津川１丁目５−１９'
        	]);
        DB::table('parks')->where('id',111112)->update([
            'vehicle_type' => '普通車',
            'name' => 'JPMキリン堂新大阪宮原店駐車場',
            'park_address' => '〒532-0003 大阪府大阪市淀川区宮原4-2-21'
        	]);
        DB::table('parks')->where('id',111113)->update([
            'vehicle_type' => '普通車',
            'name' => 'JPM西友緑橋店駐車場',
            'park_address' => '〒537-0011 大阪府大阪市東成区東今里3-1-2'
        	]);
        DB::table('parks')->where('id',111114)->update([
            'vehicle_type' => '普通車',
            'name' => 'superjpmマザーブロス',
            'park_address' => '〒562-0036 大阪府箕面市船場西１丁目６−１'
        	]);		        
    }
}
