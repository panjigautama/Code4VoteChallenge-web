<?php

class UserVoteController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Input::all();

		$results = array();

		// get user votes
		$user_votes = UserVote::all()->load('socmed','candidate','sex')->take(10);
		$results['user_votes'] = $user_votes->toArray();

		// get votes summary
		$candidates = Candidate::all();
		$count = 0;
		foreach ($candidates as $candidate) 
		{
			$results['candidates'][$count]['id'] 	= $candidate->id; 
			$results['candidates'][$count]['name'] 	= $candidate->name; 
			$results['candidates'][$count]['votes'] = UserVote::byCandidate($candidate->id)->count(); 
			$count++;
		}

		return APIHelper::response( 200, $results );

	}

	public function getVotes()
	{
		$input = Input::all();

		if( isset($input['size']) )
		{
			$query;
			if( isset($input['after_id']) )
			{
				$query = UserVote::afterID($input['after_id']);
			}

			if( isset($input['before_id']) )
			{
				$query = UserVote::beforeID($input['before_id']);
			}

			$user_votes = $query->take($input['size'])->get()->load('socmed','candidate','sex');
			return APIHelper::response( 200, $user_votes->toArray() );

		}
		else
		{
			return APIHelper::response( 400, null );
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if( isset($input['socmed_id']) && isset($input['unique_id']) && isset($input['candidate_id']) && isset($input['is_anonymous']) )
		{
			// check validity
			if( count( Socmed::find($input['socmed_id']) ) == 0 )
			{
				return APIHelper::response( 200, null, API_ERROR_ID_UNAVAILABLE_SOCMED );
			}
			if( count( Candidate::find($input['candidate_id']) ) == 0 )
			{
				return APIHelper::response( 200, null, API_ERROR_ID_UNAVAILABLE_CANDIDATE );
			}
			if( $input['is_anonymous'] > 1 )
			{
				return APIHelper::response( 200, null, API_ERROR_ID_UNAVAILABLE_ANONYMOUS );
			}

			// insert vote
			$user_vote = new UserVote;
			$user_vote->socmed_id 	 = $input['socmed_id'];
			$user_vote->unique_id 	 = $input['unique_id'];
			$user_vote->candidate_id = $input['candidate_id'];
			$user_vote->is_anonymous = $input['is_anonymous'];

			// insert optional data
			if(isset($input['name']))
			{
				$user_vote->name = $input['name'];
			}

			if(isset($input['email']))
			{
				$user_vote->email = $input['email'];
			}

			if(isset($input['location']))
			{
				$user_vote->location = $input['location'];
			}

			if(isset($input['message']))
			{
				$user_vote->message = $input['message'];
			}

			if(isset($input['birthdate']))
			{
				$user_vote->birthdate = $input['birthdate'];
			}

			$user_vote->save();

			return APIHelper::response( 200, $user_vote->toArray() );
		}
		else
		{
			return APIHelper::response( 400 );
		}

	}

}
