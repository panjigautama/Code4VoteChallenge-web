<?php

class UserVote extends Eloquent {

	protected $table 		= "user_votes";
    protected $softDelete 	= true;

    public function socmed()
    {
        return $this->belongsTo('Socmed','socmed_id');
    }

    public function candidate()
    {
        return $this->belongsTo('Candidate','candidate_id');
    }

    public function sex()
    {
        return $this->belongsTo('Sex','sex_id');
    }

    public function scopeAnonymous($query)
    {
        return $query->where('is_anonymous', '=', 1);
    }   

    public function scopeByCandidate($query,$candidate_id)
    {
        return $query->where('candidate_id', '=', $candidate_id);
    }   
}
