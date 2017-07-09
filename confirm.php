<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'a.mitsuyori.15@gmail.com'; // localでの確認用
if ($_POST['name'] == null) {
  $_POST['name'] = '学生';
}
$subject = $_POST['name'] . 'さんからのお問い合わせ';
$message = 'EMAIL : ' . $_POST['email'] . "\n\n" .
            'TEL : ' . $_POST['phone_number'] . "\n\n" .
            '内容 : ' . $_POST['request'];
$headers = $_POST['email'] . "\n";

if (mb_send_mail(
  $to,
  $subject,
  $message,
  $headers
)) {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: /pages/success");
  // echo "お問い合わせメールが送信されました。";
} else {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: /pages/failure");
  // echo "お問い合わせメールの送信に失敗しました。";
}


?>
