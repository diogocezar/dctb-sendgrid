<?php
	require 'vendor/autoload.php';
	$sendgrid = new SendGrid("SENDGRID_APIKEY");
	$email    = new SendGrid\Email();
	$email->addTo("xgordo@gmail.com")
	      ->setFrom("xgordo@gmail.com")
	      ->setSubject("Sending with SendGrid is Fun")
	      ->setHtml("<h1>Testing</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi alias laudantium consequatur accusantium quibusdam nisi temporibus veritatis velit adipisci, quasi magni, repellat, nam quisquam voluptate minus cupiditate cumque natus corporis.</p>");
	$sendgrid->send($email);
?>