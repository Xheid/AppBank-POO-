<?php include "common/header.php" ?>
<style type="text/css">
  .rep{
    position: absolute;
    left: 41%;
    top: 215px;
    color: #265a88;
    font-size: 2em;
  }
</style>
<div class="home-link">
  <a href="/" style="font-size: 1.4em;"><img src="assets/img/left.png" style="margin-bottom: 5px;"> Page d'accueil</a>
</div>
<div id="particles-js"></div>
<div class="container container-fluid">
  <div id="header">
        <h3>S'enregistrer</h3>
  </div>
  <div id="transactions">
    <form role="form" class="col-md-10 form-horizontal" method="post">
        <div class="form-group">
          <!-- Nom -->
          <label class="sr-only" for="name">Votre Nom et prenom :</label>
          <input name="nom" type="text" class="col-md-16 form-control" id="name" placeholder="Votre Nom et prenom" required style="width: 400px;">
          <!-- Destinataire -->
          <label class="sr-only" for="destinataire">Votre email :</label>
          <input name="email" type="email" class="form-control" id="destinataire" placeholder="Votre email" style="margin-top: 10px;" required>
          <label class="sr-only" for="NumberCard">Votre mot de passe :</label>
          <input name="password" type="password" class="form-control" id="destinataire" placeholder="Votre Mot de passe" style="margin-top: 10px;" required>

          <button type="submit" class="btn-lg btn btn-success" style="margin-top: 30px;">S'enregistrer</button>
          <a style="margin-top: 30px;color:white; text-decoration: none;" href="/user/login" class="btn btn-lg btn-primary">Se connecter</a>
        </div>
    </form>
  </div>
</div>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="assets/js/script.js"></script>