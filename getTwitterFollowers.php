<?php 

function getTwitterFollowers($screenName = 'DiamondXF')
{
    require_once('Cache.php');
    require_once('TwitterAPIExchange.php');
    // this variables can be obtained in http://dev.twitter.com/apps
    // to create the app, follow former tutorial on http://www.codeforest.net/get-twitter-follower-count
    $settings = array(
        'oauth_access_token' => "5WkgXrQSfqbAHgYWjlT9kkCxM",
        'oauth_access_token_secret' => "tgks2RcDjyLGJObvlijf0cYnboJjnn9LdbjpQs3vhF3ewMdcXz",
        'consumer_key' => "545371167-hQaJ2S20YqPe5qWg8NslmtaHelVvQlCtT962hYhu",
        'consumer_secret' => "YHsSc3Wq3zlTqz0eiELpt5c78Vg41kNY3sfq5OnLVHGyE"
    );
 
    $cache = new Cache();
  
    // get follower count from cache
    $numberOfFollowers = $cache->read('cfTwitterFollowers.cache');
    // cache version does not exist or expired
    if (false === $numberOfFollowers) {
        // forming data for request
        $apiUrl = "https://api.twitter.com/1.1/users/show.json";
        $requestMethod = 'GET';
        $getField = '?screen_name=' . $screenName;
 
        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getField)
             ->buildOauth($apiUrl, $requestMethod)
             ->performRequest();
 
        $followers = json_decode($response);
        $numberOfFollowers = $followers->followers_count;
  
        // cache for an hour
        $cache->write('cfTwitterFollowers.cache', $numberOfFollowers, 1*60*60);
    }
  
    return $numberOfFollowers;
}

?>