<?php

class CustommerController extends BaseController {

  public function index($req, $res){
    // Modèle Film
    $res->html("transaction.php", array());
  }

  // je recupere les données du formulaire
  public function getData() {
    return array(
      "Nom" => $_POST["nom"],
      "Montant" => $_POST["montant"],
      "Destinataire" => $_POST["destinataire"]
    );
  }

  public function add($req, $res){
    // $number = "+33673133489";
    // $name = "Théo";
    // $code = "0700";
    // file_get_contents("http://banque.local:8888/sms/sms.php?number=+$number&name=$name&code=$code");

    $transaction = new Transaction();
    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $model = new User();
      $user = $model->findOneByEmail($_POST['destinataire']);
      if($user) {
        $transaction->insert($this->getData());
        $res->html("transaction.php", array());
         echo "<div class='rep'>Paiement effectué</div>";
      } else {
        $res->html("transaction.php", array());
        echo "<div class='rep'>Adresse mail invalide</div>";
      }
    } else {
        $res->html("transaction.php", array());
    }

  }
}
