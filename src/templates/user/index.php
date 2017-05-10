<?php include "header.php" ?>


<div class="container content">
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>Nom du client</th>
            <th>Montant</th>
            <th>Nom du destinataire</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($data["transaction"] as $key => $value) { 
              if ($value["Destinataire"] == $data['usermail']){ ?>
                <tr>
                  <td><?php echo $value["Nom"] ?></td>
                  <td><?php echo $value["Montant"] ?>€</td>
                  <td><?php echo $value["Destinataire"] ?></td>
                </tr>
          <?php 
              } 
            } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
