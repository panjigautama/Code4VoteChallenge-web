<?php
class CollectiveTweet extends Eloquent {

    // protected $collection = 'collective_tweet';
    // protected $connection = 'mongodb';
	protected $guarded = array();
	protected $table   = "collective_tweets";
    public $timestamps = false;

    public function candidate()
    {
        return $this->belongsTo('Candidate','candidate_id');
    }

    public function scopeByCandidate($query,$candidate_id)
    {
        return $query->where('candidate_id', '=', $candidate_id);
    }   

    public function scopePolarityPositive($query)
    {
        return $query->where('polarity', '=', 4);
    } 

    public function scopePolarityNeutral($query)
    {
        return $query->where('polarity', '=', 2);
    } 

    public function scopePolarityNegative($query)
    {
        return $query->where('polarity', '=', 0);
    } 

}