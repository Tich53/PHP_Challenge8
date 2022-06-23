<form action = "/thanks.php" method="post">
    <div>
        <label for="surname">Nom :</label>
        <input type="text" id="surname" name="user_surname" required autofocus>
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="email">@ :</label>
        <input type="email" id="email" name="user_email" required>
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel" required>
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
        <textarea name="user_message" id="message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>


