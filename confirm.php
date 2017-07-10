<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'a.mitsuyori.15@gmail.com'; // localでの確認用

if ($_POST['name'] == null) {
  $_POST['name'] = '学生';
}

$subject = $_POST['name'] . 'さんからのお問い合わせ';

if ($_POST['company_name'] !== null) {
  $company_name = '会社名：' . $_POST['company_name'] . "\n";
}
if ($_POST['department'] !== null) {
  $department = '部署名：' . $_POST['department'] . "\n";
}
if ($_POST['univ_name'] !== null) {
  $univ_name = '大学名：' . $_POST['univ_name'] . "\n";
}
if ($_POST['univ_department'] !== null) {
  $univ_department = '学部・学科：' . $_POST['univ_department'] . "\n";
}
if ($_POST['select_request'] !== null) {
  $select_request = '問い合わせ理由：' . $_POST['select_request'] . "\n";
}
if ($_POST['univ_job_department'] !== null) {
  $univ_job_department = '部署：' . $_POST['univ_job_department'] . "\n";
}

$message =  $company_name . $department . $univ_name . $univ_department . $univ_job_department . $select_request .
            'EMAIL：' . $_POST['email'] . "\n" .
            'TEL：' . $_POST['phone_number'] . "\n\n" .
            $_POST['request'];

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
