<?php

class userSignup extends BaseController {

    public function getData() {
        return array(
            "nom" => $_POST["nom"],
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        );
    }

    public function index($req, $res) {
        $res->html("signup.php", array());
    }

    public function signUp($req, $res) {
        $user = new User();

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $result = $user->insert($this->getData());
            $this->redirect("/user/login");
        } else {
            $res->html("/signUp.php", array());
        }
    }
}