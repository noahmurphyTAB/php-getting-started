<?php
######## SLACK ###########
    
$command = $_POST['command'];           // Slash command - should be /request
$request = $_POST['text'];              // Text after Slash command
$token = $_POST['token'];               // Slash command verification token
$user_id = $_POST['user_id'];           // Slack user ID
$slack_username = $_POST['user_name'];  // Slack username

    echo "Hi ".$slack_username.". You must be happy to see that you typed: *".$request."*.;
?>
