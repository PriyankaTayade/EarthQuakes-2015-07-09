<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */
// include 'header.php';
// Suppress errors.
error_reporting(0);

// Path to the chat directory:
define('AJAX_CHAT_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
// Database hostname:
/*$config['dbConnection']['host'] = 'localhost';
// Database username:
$config['dbConnection']['user'] = 'root';
// Database password:
$config['dbConnection']['pass'] = '';*/
// Include custom libraries and initialization code:
require(AJAX_CHAT_PATH.'lib/custom.php');

// Include Class libraries:
require(AJAX_CHAT_PATH.'lib/classes.php');

// Initialize the chat:
$ajaxChat = new CustomAJAXChat();
?>