 <?php

require 'smtp/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->port587=587;
$mail->SMTPAuth=true;
$mail->SMTPsecure='tls';

$mail->Username = 'adityatalaviya8@gmail.com';
$mail->Passsword = 'Aditya24742';

$mail->setFrom('adityatalaviya8@gmail.com' , 'Aditya');
$mail->addAddress('talaviyaadityait20@gmail.com');
$mail->addReplyTo('adityatalaviya8@gmail.com');

$mail->isHTML(true);
$mail->Subject='PHP Mailer subject';
$mail->Body='<h1 align=center> Registration</h1><br><h4 align=center> Fill the data.</h4>';

if(!$mail->send()){
	echo "msg is not successful added.";
}
else{
	echo "msg is successful added.";
}


?> 






<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
</head>
<body>

<p>Directory access is forbidden.</p>

</body>
</html> -->
