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
        <h3>Faire une transaction</h3>
        <p style="text-align: center;">Choisissez le <strong>montant</strong> et le <strong>destinataire</strong> de votre transaction puis veuillez renseigner <strong>vos informations banquaires.</strong></p>
  </div>
  <div id="transactions">
    <form role="form" class="col-md-5 form-horizontal" method="post">
        <div class="form-group">
          <!-- Nom -->
          <label class="sr-only" for="name">Votre Nom :</label>
          <input name="nom" type="text" class="form-control" id="name" placeholder="Votre Nom" required>
          <!-- Destinataire -->
          <label class="sr-only" for="destinataire">Le destinataire :</label>
          <input name="destinataire" type="email" class="form-control" id="destinataire" placeholder="Le destinataire " style="margin-top: 10px;" required>
          <label class="sr-only" for="NumberCard">Numero de la carte banquaire :</label>
          <input name="NumberCard" type="number" class="form-control" id="destinataire" placeholder="Numéro de la carte" style="margin-top: 10px;" required>
          <!--expiration de la carte-->
          <div style="display: flex; justify-content: space-between;">
            <label class="sr-only" for="price">Date d'expiration de la carte</label>
            <div class="col-md-10" style="margin-top: 10px; padding-left: 0px;">
              <input name="dateLimit" min="2017-03-20" type="date" class="form-control" id="dateLimit" placeholder="Date d'expiration" required>
            </div>
          <!-- Cryptogramme -->
            <label class="sr-only" for="price">cryptogramme</label>
            <div class="col-md-3" style="margin-top: 10px; padding-left: 0px; padding-right: 0px;">
              <input name="cryptogramme" type="numer" min="3" class="form-control" id="cryptogramme" placeholder="CVC2" required>
            </div>
          </div>
          
          <!-- Montant de la transaction -->
          <label class="sr-only" for="price">Montant de la transaction :</label>
          <div class="input-group col-md-16" style="margin-top: 10px;">
              <div class="input-group-addon">€</div>
              <input name="montant" type="number" class="form-control" id="price" placeholder="Montant de la transaction">
              <div class="input-group-addon">.00</div>
          </div>

          <button type="submit" class="btn-lg btn-block btn btn-primary" style="margin-top: 10px;">Valider</button>
          <!-- Numero, validité et code de sécurité -->
        </div>
    </form>
  </div>
</div>

<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="assets/js/script.js"></script>

<?php include "common/footer.php" ?>
