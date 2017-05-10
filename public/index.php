<?php


// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php';
require APPLICATION_PATH . '/config.php';

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

/*
  Page d'accueil
*/

$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index') // Classe IndexController, Méthode index
));

/*
  Formulaire Transaction
*/

$router->addRoute(array(
    'route'  => '^/sendMoney$',
    'GET'   => array('CustommerController', 'index')
));

$router->addRoute(array(
    'route'  => '^/sendMoney$',
    'ALL'   => array('CustommerController', 'add')
));

/*
  Authentification de l'admin.
*/

// -------------------
$router->addRoute(array(
    'route'  => '^/admin$',
    'GET'   => array('AdminController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/revoc$',
    'GET'   => array('AdminController', 'revocationConfirmation') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/revoc$',
    'ALL'   => array('AdminController', 'revocationtest') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users$',
    'GET'   => array('AdminUserController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users/add$',
    'ALL'   => array('AdminUserController', 'add') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/users/update$',
    'ALL'   => array('AdminUserController', 'update') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/users/delete$',
    'GET'   => array('AdminUserController', 'deleteConfirmation') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/users/delete$',
    'ALL'   => array('AdminUserController', 'delete') // Classe IndexController, Méthode index
));

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'GET'   => array('AdminController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'POST'   => array('AdminController', 'loginPost') // Classe MembreController, Méthode loginPost
));

// Déconnexion de l'espace membre
$router->addRoute(array(
    'route'  => '^/admin/logout$',
    'GET'   => array('AdminController', 'logout')
));


/*
  Authentification des utilisateur.
*/

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/user/login$',
    'GET'   => array('userController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/user/login$',
    'POST'   => array('userController', 'loginPost') // Classe MembreController, Méthode loginPost
));

$router->addRoute(array(
    'route'  => '^/user$',
    'GET'   => array('UserTransactionController', 'index')
));

$router->addRoute(array(
    'route'  => '^/user/logout$',
    'GET'   => array('userController', 'logoutuser')
));

/*
    inscription user
*/

$router->addRoute(array(
    'route'  => '^/inscription$',
    'GET'   => array('userSignup', 'index')
));

$router->addRoute(array(
    'route'  => '^/inscription$',
    'ALL'   => array('userSignup', 'signUp')
));



$router->run();
