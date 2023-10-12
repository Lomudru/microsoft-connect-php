<?php

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;


$tenant = "common";
$client_id = "Client_id";
$client_secret = "Client_Secret";
$callback = "http://localhost/microsoft-connect/callback.php"; // redirection
$scopes = ["User.Read"];



$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);

header("location: " . $microsoft->getAuthUrl());