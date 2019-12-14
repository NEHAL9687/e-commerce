<?php

require './PHPMailerAutoload.php';
    //        require_once './class.phpmailer.php';

            $mail = new PHPMailer;

            $mail->isSMTP();                                // Set mailer to use SMTP
                                                 
            $mail->SMTPDebug = 2;

            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->Username = 'nehalpanchal54@gmail.com';                 // SMTP username
            $mail->Password = 'np89805443200';                           // SMTP password
            $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
            
            
            $mail->setFrom('nehalpanchal54@gmail.com', 'Company Name');
            
            $mail->addReplyTo('nehalpanchal54@gmail.com', 'Company Name');
            
            $address = "akash.padhiyar@gmail.com";  //Receiver Email ID
            $mail->addAddress($address, 'Company Name');     // Add a recipient
           
            $mail->addAddress('nehalpanchal54@gmail.com', 'Company Name');     // Add a recipient
           
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = "Subject of PHP Mailer" ;
            $body = "Hello I am Body Message";
            $mail->msgHTML($body);
            

            if(!$mail->send()) {
                echo "<script> alert ('Error in Email Send');</script>";
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<script> alert ('Email Send');</script>";
            }