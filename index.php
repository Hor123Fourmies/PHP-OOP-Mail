<?php

include"classes/email.php";

$to = $_POST['destinataire'];
$from = $_POST['expediteur'];
$subject = $_POST['sujet'];
$message = $_POST['message'];

$email = new email($to, $from, $subject, $message);
$email->envoyer();
