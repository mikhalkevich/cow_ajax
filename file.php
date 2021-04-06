<?php
 $subject = 'Вам письмо от tut.by';
 $body = '<p>Данные пользователя:</p>
 <img src="http://">
  <p>email: '.$_POST['email'].'</p>
  <p>year: '.$_POST['year'].'</p>
  <p>message: '.$_POST['body'].'</p>
 ';
 $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
 $headers .= 'From: user@example.com' . " " .
'Reply-To: user@example.com' . " " .
'X-Mailer: PHP/' . phpversion();
 mail($_POST['email'], $subject, $body, $headers);
 header('Location: http://pds:81/');
?>