<?php

$deptrecognise = $userid[3];

if($deptrecognise == '1')

{
    define ( 'DB_HOST', 'localhost' );
    define ( 'DB_USER', 'root' );
    define ( 'DB_PASSWORD', '' );
    define ( 'DB_NAME', 'cse' );
    $con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysqli_error());

}

if($deptrecognise == '2')
{
    define ( 'DB_HOST', 'localhost' );
    define ( 'DB_USER', 'root' );
    define ( 'DB_PASSWORD', '' );
    define('DB_NAME', 'ece' );
$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysqli_error());

}
 //********code for other departments///


?>
