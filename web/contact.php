<?php

$name = $_POST['postname'];
$mail = $_POST['postemail'];
$tel = $_POST['posttel'];
$subject = $_POST['postsubject'];
$message = $_POST['postmessage'];

if (empty($name) || empty($mail) || empty($tel) || empty($subject) || empty($message)) {
	echo "1";
}elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	echo "2";
} elseif (!preg_match("/^[0-9]+$/", $tel)){
	echo "3";
} else {
    $from = $mail;
    $to = "cs@ibilemart.com";
  
	$to = 'cs@ibilemart.com';
	$message = $message.'........This mail was sent from the contact page.';
	$headers = 'From: '.$from;


    if(mail($to, $subject, $message, $headers)){
    	echo '0';
	} else{
	    echo '4';
	}
}
