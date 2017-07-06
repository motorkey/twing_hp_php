<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'a.mitsuyori.15@gmail.com';
$subject = $_POST['name'] . 'さんからのお問い合わせ';
$message = $_POST['request'];
$headers = $_POST['email'] . "\r\n";

if (mb_send_mail(
  $to,
  $subject,
  $message,
  $headers
)) {
  echo "お問い合わせメールが送信されました。";
} else {
  echo "お問い合わせメールの送信に失敗しました。";
}


?>
