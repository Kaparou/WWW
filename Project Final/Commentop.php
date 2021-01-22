<?php

include_once ('connection.php');
$title = $_GET['movie_name'];

if (isset($_GET['commentsubmit'])){
    if (!(($_GET['uname'] == '')||($_GET['rate'] == ''))) {
        echo $uname = $_GET['uname'];
        echo $id = $_GET['id'];
        echo $rate = (double)$_GET['rate'];
        echo $message = $_GET['message'];

        echo  $date = (string)$_GET['date'];
        echo  $movie_name =  $_GET['movie_name'];
        echo  $is_member =  $_GET['is_member'];


        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword =  "1234";
        $dbName = "moviesdb" ;

        $conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbName) ;//or die("Connect failed: %s\n". $conn -> error);
        $conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
        $sql = "INSERT INTO moviesdb.newreviews VALUES ('$movie_name','$message','$uname','$date','$rate','$is_member','$id')";
        $result = $conn->query($sql);
        header ('Location: Reviews.php? json=' .$movie_name);
        die;
    }
    else{
        header ('Location: emptycomment.php? movie_name=' .$title);
    }
}

?>