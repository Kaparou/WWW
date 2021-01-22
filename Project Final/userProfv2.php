<?php
session_start();
include_once ('connection.php');
//include('connection.php'); CONNECTION ANTI GIA TO INCLUDE
//set_error_handler(function() { /* ignore errors */ });
//$this_user = $_SESSION["namev2"]; // DEN PREPEI NA GINEI ME GLOBAL METAVLHTH
$this_user_id = $_GET['id'];
$sql = "SELECT * FROM moviesdb.users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    if (!strcasecmp($this_user_id, $row['id'])) {
        break;
    }
}
//function hello(){
//    global $row;
//
//    $dbServername = "localhost";
//    $dbUsername = "root";
//    $dbPassword =                                                                                                                                                                                               "1234";
//    $dbName = "moviesdb" ;
//
//    $conns = new mysqli('localhost','root',$dbPassword,'moviesdb');
//    $conns =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
//
//    if ($conns -> connect_errno) {
//        echo "Failed to connect to MySQL: " . $conns -> connect_error;
//        exit();
//    }
//
//
//    $id = $_GET['id'];
//
//    $my_id = $_SESSION["data"][12];
//    $temp = $row['followers']+1;
//
//    $statement = "UPDATE moviesdb.users SET followers ='$temp' WHERE id = '$id'";
//    $conns->query($statement);
//
//    $strv = strval($id);
//
//    $temp = $row['following_id'] . $strv;
//
//    $statement = "UPDATE moviesdb.users SET following_id ='$temp' WHERE id = '$my_id'";
//    $conns->query($statement);
//
//}
//
//function followed(){
//    echo "Hello";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style_profile.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>

<div class="tit">
    MoviePedia
</div>
<div class = "searchbar">
    <a href="Home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="10top.php">Highest rated movies</a>
    <form action="response.php" method = "get">
        <input type = "text" name = "movie" placeholder="Search...">
        <input type = "submit" name = "submit_form" value = "search">
    </form>
</div>
<div class="container">
    <div class="leftbox">
        <img src="img/body.png" class="avatar">
        <div class="username">
            <?php echo  $row['fullName']?>
        </div>
        <div class="birthday">
            <?php echo  $row['birthday']?>
        </div>
    </div>
    <div class="rightbox">
        <div class="favorites">
            <h1>Favorites</h1>
            <h2>Genre</h2>
            <p><?php echo  $row['genre']?></p>
            <h2>Movie</h2>
            <p><?php echo  $row['favmovie']?></p>
            <h2>TV Show</h2>
            <p><?php echo  $row['favtvshow']?></p>
            <h2>Actor</h2>
            <p><?php echo  $row['favactor']?></p>
            <h2>Director</h2>
            <p><?php echo  $row['favdirector']; ?></p>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $('.fa-heart').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active')
        }
        else {
            $(this).addClass('active')

        }
    });
</script>
</body>
</html>
