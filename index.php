<?php

include __DIR__.'/vendor/autoload.php';

//use Discord\Discord;

use Discord\DiscordCommandClient;

define("TOKEN", "Mjc0NjgwNTMzNDQ2MDMzNDA4.C21nuA.lIPFNaDRuIIuKqKnyxi2AiE_LD8");


if( empty($discord) ) {
  echo "none discord";
} else{
  $discord = new Discord([
      'token' => TOKEN,
  ]);

  // Will respond to `ping` with `pong!`.
  $discord->registerCommand('ping', 'pong!');

  // Will respond to 'hi' with 'hey', 'hello' or 'wussup'.
  $discord->registerCommand('hi', ['hey', 'hello', 'wussup']);

  // Will respond to 'cool-command' with 'i am a cool command'.
  $discord->registerCommand('cool-command', function ($message, $params) {
    $reply = 'i am a cool command';
    // Do some processing etc.

    return $reply;
  });

  $discord->run();
}
//echo "hello world";

?>
