<?php

//if ($_SERVER['request_method'] === 'post')  { //voir pour majuscule à "post?

    //$errors = array(); // initialise une variable de type tableau afin d'y intégrer toutes les erreurs éventuelles

    //Vérification du formulaire:

        // tous les champs doivent être rempli : 
        // Ok via les champs required dans le formulaire
        // via PHP:

    //if (empty($_POST['user_surname'])) {
    //    $error['user_surname']="Your surname can't be empty";
        
    //}
    //if (empty($_POST['user_name'])) {
    //    $error['user_name']="Your firstname can't be empty";
        
    //}
    //if (empty($_POST['user_email'])) {
    //    $error['user_email']="Your email can't be empty";
        
    //}
    //if (empty($_POST['user_tel'])) {
    //    $error['user_tel']="Your phone number can't be empty";
        
    //}

    //if (empty($_POST['message'])) {
    //    $error['user_message']="Your message can't be empty";
    
//}

    //if (empty($errors)) {

        //header('location: /thanks.php');
        //exit();
    //}



//


//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire challenge 8 & 9</title>
</head>
<body>
    

<form action = "/thanks.php" method="post">
    <div>
        <label for="surname">Nom :</label>
        <input type="text" id="surname" name="user_surname" >
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="user_name" >
    </div>
    <div>
        <label for="email">@ :</label>
        <input type="email" id="email" name="user_email" >
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel" >
    </div>
    <label for="subject">Sujet: </label>
    <SELECT name="subject" id="subject" size="1"> 
        <OPTION value="php">PHP</OPTION>
        <OPTION value="html">HTML</OPTION>
        <OPTION value="wordpress">Wordpress</OPTION>
        <OPTION value="front-end">front-end</OPTION>
        <OPTION value="back-end">back-end</OPTION>
    </SELECT>
    <div>
        <label for="message">Message</label>
        <textarea name="user_message" id="message" ></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>




