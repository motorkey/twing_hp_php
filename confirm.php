<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'a.mitsuyori.15@gmail.com'; // localでの確認用
$subject = $_POST['name'] . 'さんからのお問い合わせ';
$message = '内容:' . "\n" . $_POST['request'];
$headers = $_POST['email'] . "\n";

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
