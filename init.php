<?php

use akokosales\LinkedIn;

require_once "LinkedIn.php"; 

$app_id = "77riozbzyyasca";
$app_secret = "6UBbsyZcoVUOwNih";
$callback = "http://localhost/callback.php";
$scopes = "r_emailaddress r_basicprofile r_liteprofile";
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);