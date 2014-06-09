<?php

class SexSeeder extends Seeder {

    public function run()
    {
        DB::table('sex')->delete();
       	$data = array(
    		    array('id'=>1,'name'=>'Male'),
            array('id'=>2,'name'=>'Female'),
    		    array('id'=>3,'name'=>'Anonymous'),
    		);
        DB::table('sex')->insert($data);
    }

}