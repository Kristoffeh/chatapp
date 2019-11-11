<?php
require 'dbconnect.php';
ob_Start();
session_start();


/*$query = "SELECT * FROM messages";
if ($result = mysqli_query($conn, $query)){
	$old = mysqli_num_rows($result);
	echo "old value fetched (" . $old . ")<br/>";
}*/

$old = 0;

$sequence = "SELECT * FROM messages";
if ($res = mysqli_query($conn, $sequence)){
	$new = mysqli_num_rows($res);
	echo "new value fetched (" . $new . ")<br/>";
}

if ($old != $new){
	$_SESSION['changed'] = "true";
	// echo "display users";
}

?>