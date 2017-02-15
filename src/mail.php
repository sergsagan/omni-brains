<?php

$recepient = "sergey.martynuk@gmail.com";
$sitename = "omni-brains";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$tel = trim($_POST["tel"]);
$message = "Имя: $name \nEmail: $email \nTel: $tel";

$pagetitle = "Новое сообщение с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
