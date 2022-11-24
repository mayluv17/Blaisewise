<?php
error_reporting(0);
session_start();
//date_default_timezone_set('Africa/Lagos');

//require_once("db-connection.php");

//predefined variables
$url = $scm = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url .= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$ur = str_replace('blaisewise/','',$_SERVER['REQUEST_URI']);
$ur = explode(' ',str_replace('?',' ',$ur));

$p = explode('/',$ur[0]);
$page1 = $p[1];
$page2 = $p[2];
$page3 = $p[3];
$page4 = $p[4];
$page5 = $p[5];


$act = $_GET['act'];
$sec = $_GET['sec'];

$browser = $_SERVER['HTTP_USER_AGENT'];
$userid = $_SESSION['userid'];
$utype = $_SESSION['utype'];
$ip=$_SERVER['REMOTE_ADDR'];
//$sb = $scm.$_SERVER['HTTP_HOST'].'/blaisewise';

?>