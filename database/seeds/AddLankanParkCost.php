<?php

use Illuminate\Database\Seeder;

class AddLankanParkCost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$selectedTime = "0:00";
    	$endTime = "0:00";
    	$id=111111;
    	$cost=123;
    	$y=0;
    	$x=0;
    	for ($x = 1 ; $x <= 7 ; $x++){
    		$cost=$cost+7;
    		$y=$y+2;
    	do{
    		$time = strtotime("+30 minutes", strtotime($selectedTime));
    		$endTime=date('G:i', $time);
    		DB::table('parking_cost_details')->insert([
    				'start_time'=>$selectedTime,
					'end_time'=>$endTime,
					'cost'=>$cost,
					'park_id'=>$x
    			]);
    		$cost=$cost+$y;
    		$selectedTime=$endTime;
    	}while($selectedTime!="0:00");
    	$selectedTime = "0:00";
    	$endTime = "0:00";
    }
    }
}
