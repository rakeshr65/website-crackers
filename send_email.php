<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


require 'phpmailer/vendor/autoload.php';
// Check if the form is submitted
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
   // $name = $_POST["name"];
   // $email = $_POST["email"];
   // $message = $_POST["message"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'gains.cloudaiservers.com'; // Your SMTP server
       // $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
       // $mail->Username   = 'test@caddschool.com';   // Your SMTP username
       //$mail->Password   = '123fgyiW';   // Your SMTP password
         $mail->Username   = 'caddschooldesigner@caddschool.com';   // Your SMTP username
         $mail->Password   = '1234Cad12';   // Your SMTP password
       // $mail->Username   = 'caddschooldesigner@gmail.com';   // Your SMTP username
       // $mail->Password   = 'crwg atqx hjpb brpu';   // Your SMTP password
        $mail->SMTPSecure = 'tls';             // Use 'tls' or 'ssl'
        $mail->Port       = 587;               // Check your SMTP port

        // Recipients
        $mail->setFrom('caddschooldesigner@caddschool.com');
        
        // Set recipient dynamically based on the form input
        //$mail->addAddress($email, $name);
        $mail->addAddress($to);   
        //$mail->addAddress('caddschooldesigner@gmail.com');
       $mail->addReplyTo('caddschooldesigner@gmail.com', 'CADDSCHOOL');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
       //  header("Location: " . $_SERVER['PHP_SELF']);
        // die ("<script>alert('');</script>");
      echo "<script>
             alert('Thanks for Enquiring with us. Our Team will contact you shortly.'); 
     </script>";
//    window.history.back();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         header("Location: " . $_SERVER['PHP_SELF']);
         exit;
        
    }
 
?>
