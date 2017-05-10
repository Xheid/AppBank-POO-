<?php include "header.php" ?>


<div class="container content">
  <h3>Toutes les Transactions passées par le site</h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Destinataire</th>
            <th>Montant</th>
            <th>Révocation</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data["transaction"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["Nom"] ?></td>
              <td><?php echo $value["Destinataire"] ?></td>
              <td><?php echo $value["Montant"] ?> €</td>
              <td><a href="/admin/revoc?id=<?php echo $value['id'];?>">Annuler</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
