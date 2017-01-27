<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;

use Discord\DiscordCommandClient;

define("TOKEN", "Mjc0NjgwNTMzNDQ2MDMzNDA4.C21nuA.lIPFNaDRuIIuKqKnyxi2AiE_LD8");


$discord = new Discord([
    'token' => TOKEN,
]);

$discord->registerCommand('ping', function ($message) {
  return 'pong!';
}, [
  'description' => 'pong!',
]);

$discord->run();
//echo "hello world";

?>
