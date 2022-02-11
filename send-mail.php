<?php 
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // MAIL_USERNAME=sdfghjkl10296@gmail.com
	// MAIL_PASSWORD=q01689346352qq
    $mail->Username = 'sdfghjkl10296@gmail.com';                 // SMTP username
    $mail->Password = 'q01689346352qq';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hoangnm94ls@gmail.com', 'Minh Hoang');
    $mail->addAddress('thienth32@gmail.com', 'Thiện đại ca');     // Add a recipient
    $mail->addAddress('nhanmathuongtin@gmail.com', 'Mạnh mã (Mạnh ngựa)');               // Name is optional
    $mail->addAddress('thaihoa5st@gmail.com', 'Thái g**');               // Name is optional
    $mail->addAddress('duongnqph04744@fpt.edu.vn', 'Dương Quá Tay');               // Name is optional
    $mail->addReplyTo('hieuncph05013@fpt.edu.vn', 'Hiếu đập đá');

    //Content
    $mail->isHTML(true);    // Set email format to HTML
    $mail->CharSet = 'UTF-8';
                              
    $mail->Subject = 'Email hỏi thăm sức khoẻ!!!!';
    $mail->Body    = '<h2>Xin Chào bạn, XXX<h2><strike>Chúng ta có quen nhau không?</strike>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Gửi email thành công.';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


 ?>