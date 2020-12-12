<?php 
	include "include/config.php";
	$control="login";
if(isset($_REQUEST['ctrl']))
    $control=$_REQUEST['ctrl'];
     $func="index";
     
include "control/".$control.".php";
$name=ucwords($control);
if(isset($_REQUEST['func']))
    $func=$_REQUEST['func'];
$obj=new $name();
$obj->$func();
?>