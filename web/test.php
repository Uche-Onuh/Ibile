<?php     
$from = 'harmless12@ymail.com';
$to = "k.olaleye@trennco.com";
$subject = 'test';
  
$message = '\n This mail was sent from the contact page.';
$headers = 'From: '.$from;
mail($to,$subject,$message,$headers);
?>