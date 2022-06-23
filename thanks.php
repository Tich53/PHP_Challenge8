<?php

$user_name = $_POST['user_name'];
$user_surname = $_POST['user_surname'];
$subject = $_POST['subject'];
$user_email = $_POST['user_email'];
$user_tel = $_POST['user_tel'];
$user_message = $_POST['user_message'];

echo "Merci $user_name $user_surname de nous avoir contacté à propos de '$subject'.";
echo "<br>";
echo "<br>";
echo "Un de nos conseiller vous contactera soit à l’adresse $user_email ou par téléphone au $user_tel dans les plus brefs délais pour traiter votre demande :";
echo "<br>";
echo "<br>";
echo $user_message;

?>