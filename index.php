<?php

    require __DIR__.'/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid = "AC78100ca5d8107e884483261a3d47a1fd";
    $token = "893cb0e0dc9c6a27016727b6ad2c3c36";
    $client = new Client($sid,$token);

    $client ->messages->create(
    '+12019938832', // Text this number
        array(
        'from' => '+19292039424', // From a valid Twilio number
        'body' => 'Hello from Twilio!'
  )
);

?>