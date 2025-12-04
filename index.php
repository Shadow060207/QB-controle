<ul>
    <li>
      <label for="name">Nom&nbsp;:</label>
      <input type="text" id="name" name="user_name" />
    </li>
    <li>
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_mail" />
    </li>
    if (message empty) {
    <li>
      <label for="msg">Vos informations ne sont pas correctes&nbsp;:</label>
      <textarea id="msg" name="user_message"></textarea>
    }
    else {
    <li>
      <label for="msg">Votre demande a bien été envoyée&nbsp;:</label>
      <textarea id="msg" name="user_message"></textarea>
    }
</ul>