<?php 
ob_start(); // Added to avoid a common error of 'header already sent' (not discussed in the tutorial)
session_start();
require_once 'connect/database.php';
require_once 'classes/users.php';
require_once 'classes/general.php';

$users 		= new Users($db);
$general 	= new General();

$errors = array();