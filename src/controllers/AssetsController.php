<?php

class AssetsController extends BaseController {

  public function script($req, $res){
    $res->html("assets/js/script.js", array());
  }

  public function style($req, $res){
    $res->html("assets/css/main.css", array());
  }
}
