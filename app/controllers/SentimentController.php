<?php
use Carbon\Carbon;
// use GuzzleHttp\Client;

class SentimentController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Input::all();

		// get votes summary
		$results = array();
		$candidates = Candidate::all();
		$count = 0;
		foreach ($candidates as $candidate) 
		{
			$results['candidates'][$count]['id'] 					= $candidate->id; 
			$results['candidates'][$count]['name'] 					= $candidate->name; 
			$results['candidates'][$count]['last_updated'] 			= $candidate->updated_at->timestamp; 
			$results['candidates'][$count]['sentiment']['positive'] = CollectiveTweet::byCandidate($candidate->id)->polarityPositive()->count(); 
			$results['candidates'][$count]['sentiment']['neutral'] 	= CollectiveTweet::byCandidate($candidate->id)->polarityNeutral()->count(); 
			$results['candidates'][$count]['sentiment']['negative'] = CollectiveTweet::byCandidate($candidate->id)->polarityNegative()->count(); 
			$results['candidates'][$count]['sentiment']['counts']   = CollectiveTweet::byCandidate($candidate->id)->count(); 
			$count++;
		}

		return APIHelper::response( 200, $results );
	}

	public function crawl()
	{
		$settings = array(
		    'oauth_access_token' 		=> "40501134-owwHlvGckteGYAqRgd61YPo7jHxyIIr9l93yfbzZL",
		    'oauth_access_token_secret' => "8jRCIFp8fsEj8SaN9lTThV0SiPSTZmYc4rxKD1gTEAVeX",
		    'consumer_key' 				=> "z18al1rBjLAtEWRcPvklutlex",
		    'consumer_secret' 			=> "CdQRgSfTqi1ThXcGZXE4dVwhl5UIjNSOLiyJTL8TC6w0VL99O2"
		);
		$keyword 		= 'prabowo';
		$url 			= 'https://api.twitter.com/1.1/search/tweets.json';
		$getfield 		= '?q='.$keyword.'&lang=en&result_type=mixed&count=10';
		$requestMethod 	= 'GET';

		$twitter 		= new TwitterAPIExchange($settings);
		$response 		= $twitter->setGetfield($getfield)
		             		->buildOauth($url, $requestMethod)
		             		->performRequest();
		$response_obj 	= json_decode($response);

		// store statuses
		$max = count($response_obj->statuses);
		for ( $i=0; $i < $max ; $i++) 
		{ 
			$date 	= new Carbon($response_obj->statuses[$i]->created_at);
			$status = new CollectiveTweet(array(

				'id' 				=> $response_obj->statuses[$i]->id,
				'candidate_id' 		=> 1,
				'screen_name' 		=> $response_obj->statuses[$i]->user->screen_name,
				'keyword' 			=> $keyword,
				'created_at' 		=> $date,
				'retweet_count' 	=> $response_obj->statuses[$i]->retweet_count,
				'favorite_count' 	=> $response_obj->statuses[$i]->favorite_count,
				'message' 			=> $response_obj->statuses[$i]->text,
				'polarity' 			=> 2,
			));
			$status->save();
		}

	}

}
