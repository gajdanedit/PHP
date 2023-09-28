<?php 
header('Content-Type:text/html;charset=utf-8');
$oldalneve=filter_input(INPUT_GET,"oldalneve",FILTER_SANITIZE_SPECIAL_CHARS);
require_once("head.php");
require_once("body.php"); 
