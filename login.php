<?php
session_start();
$username = "nicole";
$password = "password";

$xml = new DOMDocument();
$xml->load("database/accounts.xml");

$accounts = $xml->getElementsByTagName("account");

$flag = 0;
foreach($accounts as $account) {
	$username_db = $account->getElementsByTagName("username")->item(0)->nodeValue;
	$password_db = $account->getElementsByTagName("password")->item(0)->nodeValue;
    $user_id = $account->getElementsByTagName("user_id")->item(0)->nodeValue;
	if($username === $username_db) {
		$flag = 1;
		if($password === $password_db) {
            echo "login";
			$_SESSION["username"] = $username;
            $_SESSION["user_id"] = $user_id;
        } else {
		 echo "password_not_found";
        }
		break;
	}
}
echo $flag===0 ? "username_not_found" : "";
?>