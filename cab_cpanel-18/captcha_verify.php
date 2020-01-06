<?php

$captcha=$_POST['res_key'];

if(!$captcha){
  echo 'Please check the captcha form';
  exit;
}

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LekA8MUAAAAAP35F3v_vT_WKGXfl_etxCHCypZ5&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);


?>
