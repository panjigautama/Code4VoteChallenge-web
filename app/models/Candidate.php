<?php

class Candidate extends Eloquent {

	protected $table 		= "candidates";

    public function users()
    {
        return $this->hasMany('UserVote','candidate_id');
    }
}
