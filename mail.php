<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$oldname = $_POST['user_old_name'];
$middlename = $_POST['user_middle_name'];
$date = $_POST['user_date'];
$time = $_POST['user_time_name'];
$phone = $_POST['user_number_phone'];
$email = $_POST['user_mail'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'healthvlife@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '1423df8jdl'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('healthvlife@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress($email);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Групповое занятие HealthvLife';
$mail->Body    = 'Благодарим за заявку<br> Вы заплонировали групповую тренировку на ' .$date. ' ' .$time.'';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    
}
?>