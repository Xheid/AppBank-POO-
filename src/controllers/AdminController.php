<?php

class AdminController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));

    // Load user
    $transaction = new Transaction();
    $rows = $transaction->find();
    $res->html("admin/index.php", array("transaction" => $rows));
  }


  public function revocationConfirmation($req, $res) {
    $this->isLogged(array("redirect" => "/admin/login"));
    $res->html("/admin/confirmation.php", array());
  }

  public function revocationtest($req, $res) {
    $admin = new Admin();
    $password = md5($_POST["password"]);

    $rows = $admin->confirmation($password);

    if ($rows['password'] == $password) {
      $transaction = new Transaction();
      $transaction->delete($_GET["id"]);
      $this->redirect("/admin");
    } else {
      $res->html("admin/confirmation.php", array());
      echo "<div class='rep'>mot de passe incorrect</div>";
    }
  }
}
