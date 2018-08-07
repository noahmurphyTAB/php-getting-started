<?php
######## SLACK ###########

$command = $_POST['command'];           // Slash command - should be /request
$request = $_POST['text'];              // Text after Slash command
$token = $_POST['token'];               // Slash command verification token
$user_id = $_POST['user_id'];           // Slack user ID
$slack_username = $_POST['user_name'];  // Slack username
$user_email = $response_array['user']['profile']['email']; #get email address
$user_first_name = $response_array['user']['profile']['first_name']; #get first name


    echo "Hi ".$user_first_name.". You must be happy to see that you typed: *".$request."*.;
?>
