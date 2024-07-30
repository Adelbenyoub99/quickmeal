<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="{{asset("backend/css/inscription.css")}}">
  </head>
  <body>
    <div class="container">
      <h1>Inscription</h1>
      <form>
        <div class="form-group">
          <label for="username">Nom d'utilisateur :</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="email">Adresse e-mail :</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
          <label for="password-confirm">Confirmation du mot de passe :</label>
          <input type="password" id="password-confirm" name="password-confirm">
        </div>
        <button type="submit" class="btn">S'inscrire</button>
      </form>
    </div>
  </body>
</html>
