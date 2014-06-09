<?php
use Carbon\Carbon;

class CandidatesSeeder extends Seeder {

    public function run()
    {
        DB::table('candidates')->delete();
       	$data = array(
    		    array('id'=>1,'name'=>'Prabowo Hatta','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()),
    		    array('id'=>2,'name'=>'Jokowi Kalla','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()),
    		);
        DB::table('candidates')->insert($data);
    }

}