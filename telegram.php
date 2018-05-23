<?php

/* https://api.telegram.org/bot607809653:AAFDFWG1y0-hgb5f1QcXq9fh9qlyf_eqeG0/getUpdates*/

$description = $_POST['project_description'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "607809653:AAFDFWG1y0-hgb5f1QcXq9fh9qlyf_eqeG0";
$chat_id = "-184963404";
$arr = array(
  'Номер телефону: ' => $phone,
  'Email: ' => $email,
  'Опис: ' => $description
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  // header('Location: thank-you.html');
  echo "Заявку прийнято!";
} else {
  echo "Помилка надсилання форми!";
}
?>