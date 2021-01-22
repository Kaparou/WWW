<?php
session_start();
include_once ('connection.php');

$old = $_POST["old"];
$new = $_POST["new"];
$confnew = $_POST["confnew"];


if( $old != null ){
    if (!strcmp($old,$_SESSION["data"][1]))  {
        if ( !strcmp($new, $confnew)){

            $sql = "UPDATE moviesdb.users 
            SET password = '$new'
            WHERE email = '".$_SESSION["data"][0]."'";

            $conn->query($sql);
            $_SESSION["data"][1] = $new;
            $message = "You successfully changed your password!";
            header( 'location: editProf.php? msg='. $message);
            exit();
        }
        else {
            $message = "Mismatch new password. Please try again!";
            header( 'location: editProf.php? msg='. $message);
            exit();
        }
    }
    else {
        $message = "Wrong password. Please try again!";
        header ('Location: editProf.php? msg='. $message);
        exit();
    }
}

$_SESSION["data"][2] = urldecode(urlencode($_POST["fullName"]));
$_SESSION["data"][3] = urldecode(urlencode($_POST["birthday"]));
$_SESSION["data"][5] = urldecode(urlencode($_POST["favmovie"]));
$_SESSION["data"][6] = urldecode(urlencode($_POST["favtvshow"]));
$_SESSION["data"][7] = urldecode(urlencode($_POST["favactor"]));
$_SESSION["data"][8] = urldecode(urlencode($_POST["favdirector"]));
$_SESSION["data"][11] = urldecode(urlencode($_POST["genre"]));


$sql = "UPDATE moviesdb.users 
            SET fullName = '" . $_SESSION["data"][2] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET birthday = '" . $_SESSION["data"][3] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET favmovie = '" . $_SESSION["data"][5] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET favtvshow = '" . $_SESSION["data"][6] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET favactor = '" . $_SESSION["data"][7] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET favdirector = '" . $_SESSION["data"][8] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

$sql = "UPDATE moviesdb.users 
            SET genre = '" . $_SESSION["data"][11] ."'
            WHERE email = '".$_SESSION["data"][0]."'";
$conn->query($sql);

header ('Location: editProf.php');