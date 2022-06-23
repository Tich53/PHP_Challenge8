<?php

echo "Merci $_POST[user_name] $_POST[user_surname] de nous avoir contacté à propos de '$_POST[subject]'.";
echo "<br>";
echo "<br>";
echo "Un de nos conseiller vous contactera soit à l’adresse $_POST[user_email] ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande : 
$_POST[user_message]";

?>