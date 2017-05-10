<?php
/**
 * Page d'accueil
 */
class IndexController extends BaseController {

  public function index($req, $res){
    // Modèle Film
    $res->html("index.php", array());
  }
}
