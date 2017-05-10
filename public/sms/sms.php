<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACd43a4d9d59eed8ac1c83a3ba4f218403';
$token = '7ce736dc994947cfd0ccd8b8a4bc9a47';
$client = new Client($sid, $token);

$number = $_GET['number'];
$name = $_GET['name'];
$code = $_GET['code'];
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    // '+33638697344',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+33644642947',
        // the body of the text message you'd like to send
        'body' => "Bonjour $name, Veillez confirmer votre transaction réaliser par le site http://www.payn.fr avec le code suivant $code."
    )
);

// http://bank.local:8888/sms/sms.php?number=+33628840940
