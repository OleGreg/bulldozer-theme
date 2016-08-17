/* Google Reviews
============================================================================ */
<?php

function google_reviews_handler() {


$api_key = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$placeid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJL3KywLpTwokR6vUSAmY9oA4&key=AIzaSyDcZmZhZlXUYzXmziPN1mM8YtrXx4W4OSs";        //$profile_url = "https://www.googleapis.com/plus/v1/people/115950284...320?fields=image&key={YOUR_API_KEY};"  for portrait to be implemented
$cache_file = 'google-reviews.php';

if (file_exists($cache_file) && (filemtime($cache_file) < (time() - 24 * 60 * 60 ))) {

// Our cache is out-of-date, so curl for data from google places api
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

//store it as json and cache the data to google-reviews.php
$res = json_decode($result,true);
$res = serialize($res);
file_put_contents($cache_file, $res);
}

//Call to the cached data
$cachedres = unserialize(file_get_contents($cache_file));
$reviews = $cachedres["result"]["reviews"];
$rating = $cachedres["result"]["rating"];
//For star display
$spriteclass = "5";

if(!isset($reviews))    die();

$output = "<h2>Google Reviews</h2>";
$output .= "<h4>Average Rating: " . $rating . " out of 5 stars</h4>";
$output .= "<a class='margin-10' href='https://plus.google.com/+NewarkLongTermParking/about' target='blank'>Leave us a review on Google+</a>";

foreach ($reviews as $review) {

if($review['rating']>2.6) $spriteclass = "stars-3";
if($review['rating']>3.1) $spriteclass = "stars-3-5";
if($review['rating']>3.6) $spriteclass = "stars-4";
if($review['rating']>4.1) $spriteclass = "stars-4-5";
if($review['rating']>4.6) $spriteclass = "stars-5";

if($review['rating']>3) {
//$author_url = $review['author_url'];    The user ID must drawn out of the string, then curled with a new url so we can receive the authors profile picture
$output .= "<h3>" . $review['author_name'] . "</h3>"; // print author name
$output .= "<span class='stars " . $spriteclass . "'></span>"; //print rating
$output .= "<p>" . $review['text'] . "</p>";  //print review
}
}
return $output;
}
add_shortcode('google_reviews', 'google_reviews_handler');

/* Yelp Reviews
============================================================================ */
function yelp_reviews_handler($atts) {


$cache_file = 'yelp-reviews.php';

if (file_exists('yelp-reviews.php') && (filemtime('yelp-reviews.php') < (time() - 24 * 60 * 60 ))) {

require_once('lib/OAuth.php');
$CONSUMER_KEY = 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
$CONSUMER_SECRET = 'xxxxxxxxxxxxxxxxxxxxx';
$TOKEN = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$TOKEN_SECRET = 'xxxxxxxxxxxxxxxxxxxxxx';
$API_HOST = 'api.yelp.com';
$DEFAULT_TERM = 'travel';
$DEFAULT_LOCATION = 'Newark, NJ';
$SEARCH_LIMIT = 3;
$SEARCH_PATH = '/v2/search/';
$BUSINESS_PATH = '/v2/business/';

/**
* Makes a request to the Yelp API and returns the response
*/

$unsigned_url = "http://api.yelp.com/v2/business/newark-airport-long-term-parking-newark-2";
// Token object built using the OAuth library
$token = new OAuthToken($TOKEN, $TOKEN_SECRET);
// Consumer object built using the OAuth library
$consumer = new OAuthConsumer($CONSUMER_KEY, $CONSUMER_SECRET);
// Yelp uses HMAC SHA1 encoding
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$oauthrequest = OAuthRequest::from_consumer_and_token(
$consumer,
$token,
'GET',
$unsigned_url
);

// Sign the request
$oauthrequest->sign_request($signature_method, $consumer, $token);

// Get the signed URL
$signed_url = $oauthrequest->to_url();

// Send Yelp API Call
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$stuff = curl_exec($ch);
curl_close($ch);
$res = json_decode($stuff,true);
$res = serialize($res);
file_put_contents($cache_file, $res);
}
// grab the cached data
$cachedres = unserialize(file_get_contents($cache_file));

if(!isset($cachedres))    die();

$avgrating = $cachedres['rating'];
$ratingurl = $cachedres['reviews'][0]['rating_image_url'];
$excerpt = $cachedres['reviews'][0]['excerpt'];
$rating = $cachedres['reviews'][0]['rating'];
$name = $cachedres['reviews'][0]['user']['name'];
$imgurl = $cachedres['reviews'][0]['user']['image_url'];

$output = "<h2>Yelp Reviews</h2>";
$output .= "<h4>Average Rating: " . $avgrating . " out of 5 stars</h4>";
$output .= "<a class='margin-10' href='http://www.yelp.com/biz/newark-airport-long-term-parking-newark-2' target='blank'>Leave us a review on Yelp</a>";
if($rating>=4)
{
$output .= "<img class='yelp-profile-image' src=" . $imgurl . " />";
$output .= "<h3> Our most recent review, by " . $name . "</h3>";
$output .= "<img class='yelp-stars' src=" . $ratingurl . " />";
$output .= "<p>" . $excerpt . " <a target='blank' href='http://www.yelp.com/biz/newark-airport-long-term-parking-newark-2'>read on yelp</a></p>";
}
return $output;
}
add_shortcode('yelp_reviews', 'yelp_reviews_handler');

/* Google Reviews Badge
============================================================================ */
function google_badge_handler() {

$api_key = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$placeid = "ChIJL3KywLpTwokR6vUSAmY9oA4";
$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJL3KywLpTwokR6vUSAmY9oA4&key=AIzaSyDcZmZhZlXUYzXmziPN1mM8YtrXx4W4OSs";        //$profile_url = "https://www.googleapis.com/plus/v1/people/115950284...320?fields=image&key={YOUR_API_KEY};"

$cache_file = 'google-badge.php';

if (file_exists($cache_file) && (filemtime($cache_file) < (time() - 24 * 60 * 60 ))) {

//Our cached data is out of date, so curl places api for daily update
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
//store it as json and cache the data to google-reviews.php
$res = json_decode($result,true);
$res = serialize($res);
file_put_contents($cache_file, $res);
}

//grab the cached data
$cachedres = unserialize(file_get_contents($cache_file));
$avgrating = $cachedres["result"]["rating"];
$spriteclass = "5";

if(!isset($avgrating))    die();

if($avgrating>2.6) $spriteclass = "stars-3";
if($avgrating>3.1) $spriteclass = "stars-3-5";
if($avgrating>3.6) $spriteclass = "stars-4";
if($avgrating>4.1) $spriteclass = "stars-4-5";
if($avgrating>4.6) $spriteclass = "stars-5";

$output = "<img class='badge-image' src='" . get_template_directory_uri() . "/img/google-plus.png' />";
$output .= "<div class='badge-container'><h3>Google+ Reviews</h3>";
    $output .= "<span class='stars " . $spriteclass . "'></span>"; //print rating
    $output .= "<h4 class='avg-rating'>" . $avgrating . " stars</h4></div>";

return $output;


}
add_shortcode('google_badge', 'google_badge_handler');


/* Yelp Reviews Badge
============================================================================ */
function yelp_badge_handler($atts) {

$cache_file = 'yelp-badge.php';

if (file_exists($cache_file) && (filemtime($cache_file) < (time() - 24 * 60 * 60 ))) {

require_once('lib/OAuth.php');

$CONSUMER_KEY = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$CONSUMER_SECRET = 'xxxxxxxxxxxxxxxxxxxxxxxxxx';
$TOKEN = 'xxxxxxxxxxxxxxxxxxxxxxxx';
$TOKEN_SECRET = 'xxxxxxxxxxxxxxxxxxxxxxxx';
$API_HOST = 'api.yelp.com';
$DEFAULT_TERM = 'travel';
$DEFAULT_LOCATION = 'Newark, NJ';
$SEARCH_LIMIT = 3;
$SEARCH_PATH = '/v2/search/';
$BUSINESS_PATH = '/v2/business/';

/**
* Makes a request to the Yelp API and returns the response
*/

$unsigned_url = "http://api.yelp.com/v2/business/newark-airport-long-term-parking-newark-2";
// Token object built using the OAuth library
$token = new OAuthToken($TOKEN, $TOKEN_SECRET);
// Consumer object built using the OAuth library
$consumer = new OAuthConsumer($CONSUMER_KEY, $CONSUMER_SECRET);
// Yelp uses HMAC SHA1 encoding
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$oauthrequest = OAuthRequest::from_consumer_and_token(
$consumer,
$token,
'GET',
$unsigned_url
);

// Sign the request
$oauthrequest->sign_request($signature_method, $consumer, $token);

// Get the signed URL
$signed_url = $oauthrequest->to_url();

// Send Yelp API Call
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$stuff = curl_exec($ch);
curl_close($ch);
$res = json_decode($stuff,true);
$res = serialize($res);
file_put_contents($cache_file, $res);
}

//grab the cached data
$cachedres = unserialize(file_get_contents($cache_file));
if(!isset($cachedres))    die();
$avgrating=$cachedres['rating'];

if($avgrating>2.6) $spriteclass = "stars-3";
if($avgrating>3.1) $spriteclass = "stars-3-5";
if($avgrating>3.6) $spriteclass = "stars-4";
if($avgrating>4.1) $spriteclass = "stars-4-5";
if($avgrating>4.6) $spriteclass = "stars-5";

$output = "<img class='badge-image' src='" . get_template_directory_uri() . "/img/yelp.png' />";
$output .= "<div class='badge-container'><h3>Yelp Reviews</h3>";
    $output .= "<span class='stars " . $spriteclass . "'></span>"; //print rating
    $output .= "<h4 class='avg-rating'>" . $avgrating . " stars</h4></div>";

return $output;
}
add_shortcode('yelp_badge', 'yelp_badge_handler');
