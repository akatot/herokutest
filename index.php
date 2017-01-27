<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;

define("TOKEN", "Mjc0NjgwNTMzNDQ2MDMzNDA4.C21nuA.lIPFNaDRuIIuKqKnyxi2AiE_LD8");


$discord = new Discord([
    'token' => TOKEN,
]);

$discord->on('ready', function ($discord) {
    echo "hello world", PHP_EOL;

    // Listen for messages.
    $discord->on('message', function ($message, $discord) {
        echo "{$message->author->username}: {$message->content}",PHP_EOL;
    });
});

$discord->run();

//echo "hello world";

?>
