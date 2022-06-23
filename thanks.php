<?php

$user_name = $_POST['user_name'];
$user_surname = $_POST['user_surname'];
$subject = $_POST['subject'];
$user_email = $_POST['user_email'];
$user_tel = $_POST['user_tel'];
$user_message = $_POST['user_message'];

$errors = "";

if (empty($user_name)) {
    echo $errors = "Le champ 'prénom' est obligatoire";
    echo '<br>';
} 
if (empty($user_surname)) {
    echo $errors = "Le champ 'nom' est obligatoire";
    echo '<br>';
} 
if (empty($subject)) {
    echo $errors = "L'objet' est obligatoire";
    echo '<br>';
} 
if (empty($user_email)) {
    echo $errors = "Le champ 'email' est obligatoire";
    echo '<br>';
}
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    echo "";
} else { 
    echo $errors = "Le format de votre adresse email est incorrect";
    echo '<br>';
}
if (empty($user_tel)) {
    echo $errors = "Le champ 'numéro de téléphone' est obligatoire";
    echo '<br>';
}
if (empty($user_message)) {
    echo $errors = "Votre message est vide";
    echo '<br>';
}
if (empty($errors)) {
    echo "Merci $user_name $user_surname de nous avoir contacté à propos de '$subject'.";
    echo "<br>";
    echo "<br>";
    echo "Un de nos conseillers vous contactera soit à l’adresse $user_email ou par téléphone au $user_tel dans les plus brefs délais pour traiter votre demande :";
    echo "<br>";
    echo "<br>";
    echo $user_message;
}
?>