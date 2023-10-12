<?php

use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;


session_start();

require "vendor/autoload.php";
require "config/config.php";

$auth = new Auth(Session::get("tenant_id"), Session::get("client_id"), Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
$tokens = $auth->getToken($_REQUEST['code']);
$accessToken = $tokens->access_token;

$auth->setAccessToken($accessToken);

$user = new User;
$userinfo = [
    "oauth_provider" => "microsoft",
    "oauth_uid" => $user->data->getId(),
    "first_Name" => $user->data->getGivenName(),
    "last_Name" => $user->data->getSurname(),
    "email" => $user->data->getMail(),
    "gender" => "",
    "locale" => $user->data->getPreferredLanguage(),
    "picture" => "",
];

$sql = "SELECT * FROM users WHERE email = '{$userinfo['email']}'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    $userdata = mysqli_fetch_assoc($result);
    $token = $userinfo['oauth_uid'];
}else{
    $sql = "INSERT INTO users (oauth_provider, oauth_uid, first_Name, last_Name, email, gender, locale, picture, created) 
    VALUES ('{$userinfo['oauth_provider']}', '{$userinfo['oauth_uid']}', '{$userinfo['first_Name']}', '{$userinfo['last_Name']}', '{$userinfo['email']}','{$userinfo['gender']}', '{$userinfo['locale']}', '{$userinfo['picture']}', NOW())";
    $result = mysqli_query($conn, $sql);
    if($result){
        $token = $userinfo['oauth_uid'];
    }else{
        echo "user not created";
        die();
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue <?php echo $userinfo["first_Name"] ?></title>
</head>
<body>
  <div>
    <img src="<?php echo $userinfo["picture"] ?>">
    <h1><?php echo $userinfo["first_Name"] . " " . $userinfo["last_Name"]?></h1>
    <h2><?php echo $userinfo["email"] ?></h2>
  </div>
</body>
</html>