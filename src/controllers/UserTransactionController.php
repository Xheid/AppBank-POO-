<?php

class UserTransactionController extends BaseController {

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "Nom" => $_POST["Nom"],
      "Montant" => $_POST["Montant"],
      "Destinataire" => $_POST["Destinataire"]
    );
  }

  public function index($req, $res){
    
    $this->isLogged(array("redirect" => "/user/login"));

    // Load toutes les transaction.
    $transaction = new Transaction();
    $rows = $transaction->find();
    $res->html("user/index.php", array("transaction" => $rows, 'usermail' => $_SESSION['email'], 'username' => $_SESSION['name'] ));
  }
  }
