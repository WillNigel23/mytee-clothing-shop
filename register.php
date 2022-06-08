<?php
	$xml = new DOMDocument();
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->load("database/accounts.xml");
	$newAccount =  $xml -> getElementsByTagName('account');
	$fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_id = $newAccount->length;
	$newAccount = $xml -> createElement('account');
    $newAccount -> appendChild($xml -> createElement('user_id',$user_id++));
	$newAccount -> appendChild($xml -> createElement('fullname',$fullname));
    $newAccount -> appendChild($xml -> createElement('username',$username));
	$newAccount -> appendChild($xml -> createElement('password',$password));
	$xml -> getElementsByTagName('accounts') -> item(0) -> appendChild($newAccount);
	$test = $xml -> save('database/accounts.xml');

    header("location: index.php");
?>