<?php

//echo "hello world";

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;

$discord = new Discord([
    'token' => 'bot-token',
]);

$discord->on('ready', function ($discord) {
    echo "hello world", PHP_EOL;

    // Listen for messages.
    $discord->on('message', function ($message, $discord) {
        echo "{$message->author->username}: {$message->content}",PHP_EOL;
    });
});

$discord->run();

echo "hello world";

?>
