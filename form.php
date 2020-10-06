<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form  action="/thanks.php" method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label for="telephone">Téléphone :</label>
      <input type="tel" id="telephone" name="user_telephone">
    </div>
    <div>
      <label for="select-sujet">Choisissez un sujet :</label>
      <select name="sujets" id="select-sujet">
        <option>Merci de choisir un sujet</option>
        <option>Veganisme</option>
        <option>Banques</option>
        <option>Energie</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>

<?php
  var_dump($_POST);
?>

<?php
  echo $_POST['user_name'];
?>

