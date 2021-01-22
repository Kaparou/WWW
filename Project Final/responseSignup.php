<?php
session_start();
include_once ('connection.php');

$email = $_POST['email'];
$password = $_POST['psw'];
$psw_repeat = $_POST['psw-repeat'];
$uname = $_POST['uname'];

if ($password != $psw_repeat){
    $_SESSION["signupflag"] = 1;
    header ('Location: testSignup.php');
}

$result = $conn->query("select * from moviesdb.users");


$id = 0;
while($row = mysqli_fetch_row($result)){
    if ($row[2] == $uname){
        $_SESSION["errname"] = 1;
        header ('Location: testSignup.php');
    }
    $id++;
}


if(!($_SESSION["errname"] == 1) && !($_SESSION["signupflag"] == 1)) {
    $sql = "INSERT INTO users (email, password, fullName, birthday,gender,favmovie,favtvshow, favactor,favdirector, followers, followin , genre, id)
    VALUES ('$email', '$password', '$uname', 'NN/NN/NN', 'none', 'none', 'none', 'none', 'none', '0', '0', 'none' , '$id' ) ";
    $conn->query($sql);
    $_SESSION["flag"] = 1;
}


$result = $conn->query("select * from moviesdb.users");


while($row = mysqli_fetch_row($result)){
    if ($row[2] == $uname)  {
        $_SESSION["data"] = $row;
        header ('Location: Home.php');
    }
}


