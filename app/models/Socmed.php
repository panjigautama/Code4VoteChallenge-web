<?php

class Socmed extends Eloquent {

	protected $table 		= "socmeds";
    public $timestamps      = false;

    public function users()
    {
        return $this->hasMany('UserVote','socmed_id');
    }

}
