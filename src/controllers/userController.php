<?php

class userController extends BaseController {

  public function isLogged($array){
      if(isset($_SESSION["Authentifié"]) && $_SESSION["Authentifié"] == true) {
        return true;
      }
      $this->redirect($array["redirect"]);
  }

  public function redirect($path) {
    header('Location: '. $path);
    exit;
  }

  public function login($req, $res){
    // Page d'authentification
    $user = new User();
    $res->html("user/login.php", array());
  }

  public function loginPost($req, $res){
    // Récuperation des données à travers de Modèle
    $user = new User();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $rows = $user->isUser($email, $password);


    // Test si l'adresse et le mot de passe envoyer dans la variable $_POST conrespondent
    // au informations issues de la base de données
    if(($rows["email"] == $email) && ($rows["password"] == $password)){

      // Test Ok, mise à jour de la session afin de se souvenir que cette personne est bien authentifier à travers la session
      $_SESSION["Authentifié"] = true;
      $_SESSION["email"] = $rows["email"];
      $_SESSION["name"] = $rows["nom"];
      // Redirection de l'utlisateur vers l'espace membres
      header('Location: /user');
    } else {
      // si les données ne conrespondent pas, nous renvoyions la page de login à travers la vue
      $res->html("user/login.php", array());
    }
  }

  public function logoutuser($req, $res) {
      $_SESSION["Authentifié"] = 0;
      header('Location: /');
  }
}
