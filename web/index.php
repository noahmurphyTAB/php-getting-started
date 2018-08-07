<?php

require('../vendor/autoload.php');
    
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));


// Our web handlers

$app->post('/', function(Request $request) {
  ######## SLACK ###########
    
          $command = $request->get('command');           // Slash command - should be /request
          $text = $request->get('text');              // Text after Slash command
          $user_id = $request->get('user_id');           // Slack user ID
          $slack_username = $request->get('user_name');  // Slack username

  return "Hello there! You just used command ".$command.", Your text was  ".$text.", your user id is".$user_id.", and your username is ".$slack_username;
});

$app->run();
