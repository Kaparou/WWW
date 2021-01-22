<?php

$dbServername = "localhost";
$dbUsername = "root1";
$dbPassword =                                                                                                                                                                                               "1234";
$dbName = "moviesdb" ;

//$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
//$conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
$conn = new mysqli('localhost','root1',$dbPassword,'moviesdb');
$conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
if (!$conn) {
    die;
}



