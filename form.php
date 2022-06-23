<form action = "/thanks.php" method="post">
    <div>
        <label for="surname">Nom :</label>
        <input type="text" id="surname" name="user_surname">
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="email">@ :</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel">
    </div>
    <label for="subject">Sujet: </label>
    <SELECT name="subject" id="subject" size="1"> 
        <OPTION>PHP
        <OPTION>HTML
        <OPTION>Wordpress
        <OPTION>front-end
        <OPTION>back-end
    </SELECT>
    <div>
        <label for="message">Message</label>
        <textarea name="user_message" id="message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>


