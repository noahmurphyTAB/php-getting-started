<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));


// Our web handlers

$app->get('/', function() use($app) {
  ######## SLACK ###########
    
          #$command = $_POST['command'];           // Slash command - should be /request
          #$request = $_POST['text'];              // Text after Slash command
          #$user_id = $_POST['user_id'];           // Slack user ID
          #$slack_username = $_POST['user_name'];  // Slack username

  return "Hi there";
});

$app->run();
