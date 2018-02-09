<?php

$url1 = 'https://magestore.zendesk.com/api/v2/views/114141142154/execute.json?per_page=30&page=1&include=via_id';
$url = 'https://magestore.zendesk.com/access/unauthenticated?return_to=https%3A%2F%2Fmagestore.zendesk.com%2Fagent%2Ffilters%2F114141142154';

define('USERNAME', 'support@magestore.com');
define('PASSWORD', 'GoodRiddance28082017');
define('URL', $url);

$username = USERNAME;
$password = PASSWORD;
$loginUrl = URL;

//init curl
$ch = curl_init();

//Set the URL to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);

// ENABLE HTTP POST
curl_setopt($ch, CURLOPT_POST, 1);

//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user_email='.$username.'&user_password='.$password);

//Handle cookies for the login
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
//not to print out the results of its query.
//Instead, it will return the results as a string return value
//from curl_exec() instead of the usual true/false.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute the request (the login)
$store = curl_exec($ch);

//the login is now done and you can continue to get the
//protected content.

//set the URL to the protected file
curl_setopt($ch, CURLOPT_URL, $url1);

//execute the request
$content = curl_exec($ch);

//save the data to disk
var_dump($content);