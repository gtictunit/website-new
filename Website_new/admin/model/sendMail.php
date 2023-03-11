<?php
    class sendMail{

        public function accountConfirmation($fname, $to, $pas){
            $subject = 'Account Confirmation Needed';
            $from = 'gtchildrenchurch@glorytabernacleib.org';
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<h1 style="color:#f40;">Dear'.$fname.'</h1>';
            $message .= '<p style="color:#080;font-size:18px;">Thank you for your interest and commitment to the
            glory tabernacle children church.<br>An account have been created for you on our newly created
            children church management system. Find the link and the credentials to login into your 
            dashboard below:<br>Username: '.$to.'<br>Password'.$pas.'<br></p>';
            $message .= '</body></html>';
            
            // Sending email
            if(mail($to, $subject, $message, $headers)){
                return 1;
            } else{
                return 0;
            }
        }
    }