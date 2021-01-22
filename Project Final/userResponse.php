<?php
session_start();

include_once ('connection.php');
$value = $_POST['submit'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("select * from moviesdb.users");


while($row = mysqli_fetch_row($result)){
    //echo $row[1];
    //$e = mysqli_fetch_row($result);
    //echo $row[1] ,"~~", $row[2], "-->--";

    if ($row[0] == $email){

        if($row[1] == $password){
            $_SESSION["flag"] = 1;
            $_SESSION["data"] = $row;
        }
        else{
            $_SESSION["flag"] = null;
        }
    }
}

header ('Location: Home.php');


//if (!strcmp($value,"Log in")) {
//    header('Location: Home.php');
//}

