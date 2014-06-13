<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'APIHelper' => $baseDir . '/app/library/ApiHelper.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Candidate' => $baseDir . '/app/models/Candidate.php',
    'CandidatesSeeder' => $baseDir . '/app/database/seeds/CandidatesSeeder.php',
    'CollectiveTweet' => $baseDir . '/app/models/CollectiveTweet.php',
    'CreateCandidatesTable' => $baseDir . '/app/database/migrations/2014_06_09_094607_create_candidates_table.php',
    'CreateCollectiveTweetTable' => $baseDir . '/app/database/migrations/2014_06_09_164554_create_collective_tweet_table.php',
    'CreateSexTable' => $baseDir . '/app/database/migrations/2014_06_09_094949_create_sex_table.php',
    'CreateSocmedsTable' => $baseDir . '/app/database/migrations/2014_06_09_094627_create_socmeds_table.php',
    'CreateUserVotesTable' => $baseDir . '/app/database/migrations/2014_06_09_094969_create_user_votes_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'SentimentController' => $baseDir . '/app/controllers/SentimentController.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Sex' => $baseDir . '/app/models/Sex.php',
    'SexSeeder' => $baseDir . '/app/database/seeds/SexSeeder.php',
    'Socmed' => $baseDir . '/app/models/Socmed.php',
    'SocmedsSeeder' => $baseDir . '/app/database/seeds/SocmedsSeeder.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'TwitterAPIExchange' => $baseDir . '/app/library/TwitterAPIExchange.php',
    'UserVote' => $baseDir . '/app/models/UserVote.php',
    'UserVoteController' => $baseDir . '/app/controllers/UserVoteController.php',
);
