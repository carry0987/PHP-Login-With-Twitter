<?php
if (!session_id()) {
    session_start();
}

// Include Twitter client library 
include_once 'class/class_twitter_oauth.php';

// Configuration and setup Twitter API
$consumerKey = 'Your_Twitter_API_Key';
$consumerSecret = 'Your_Twitter_API_Secret';
$redirectURL = 'Your_Twitter_API_Redirect_URL';
