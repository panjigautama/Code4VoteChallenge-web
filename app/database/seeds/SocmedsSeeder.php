<?php

class SocmedsSeeder extends Seeder {

    public function run()
    {
        DB::table('socmeds')->delete();
        $data = array(
            array('id'=>1,'name'=>'Twitter'),
            array('id'=>2,'name'=>'Facebook'),
            array('id'=>3,'name'=>'Google'),
        );
        DB::table('socmeds')->insert($data);
    }

}