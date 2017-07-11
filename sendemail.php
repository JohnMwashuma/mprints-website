<?php
 require_once('PHPMailerAutoload.php');
    $name       = @trim(stripslashes($_POST['name'])); 
    $email_address     = @trim(stripslashes($_POST['email'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['message'])); 
    
    $email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:<br />\n\nName: $name <br /> \n\nSubject: $subject <br />\n\nEmail: $email_address <br />\n\nMessage:\n$message";

    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "mprintscontactenquiries@gmail.com";
    $mail->Password = "Password1&*";
    $mail->SMTPSecure = "ssl";  
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
 
    $mail->AddAddress('john.mwashuma@gmail.com', 'MPrints');
    $mail->addReplyTo($email_address, $name);
    $mail->setFrom($email_address, $name);
    $mail->Subject  =  $subject;
    $mail->IsHTML(true);
    $mail->Body    = $email_body;
  
     if($mail->Send())
     {
    jQuery(function ($) {
    'use strict';
         var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
            }
        }).done(function (data) {
            form_status.html('<p class="text-success">Thank you for contacting us. WE will contact you as early as possible.</p>').delay(7000).fadeOut();
        });
        });
     }
     else
     {
        echo "Mail Error - >".$mail->ErrorInfo;
     }
  

/*
$name       = @trim(stripslashes($_POST['name'])); 
$email_address     = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "X-Mailer: PHP/".phpversion();

 create email body and send it 
$to = 'john.mwashuma@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_From = 'mprintscontactenquiries@gmail.com';
$email_subject = "MPrints Contact Form:  $subject"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nSubject: $subject\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: $email_From\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);


die;*/
?>
