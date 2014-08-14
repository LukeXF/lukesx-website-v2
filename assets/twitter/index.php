<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "545371167-hQaJ2S20YqPe5qWg8NslmtaHelVvQlCtT962hYhu",
    'oauth_access_token_secret' => "YHsSc3Wq3zlTqz0eiELpt5c78Vg41kNY3sfq5OnLVHGyE",
    'consumer_key' => "5WkgXrQSfqbAHgYWjlT9kkCxM",
    'consumer_secret' => "tgks2RcDjyLGJObvlijf0cYnboJjnn9LdbjpQs3vhF3ewMdcXz"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/** Perform a POST request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=DiamondXF';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

echo "<br>hi";