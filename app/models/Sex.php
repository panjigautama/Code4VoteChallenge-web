<?php

class Sex extends Eloquent {

	protected $table 		= "sex";
    public $timestamps      = false;

    public function users()
    {
        return $this->hasMany('UserVote','sex_id');
    }
}
