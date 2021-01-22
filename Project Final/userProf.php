<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style_profile.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
        input[type=button] {
            background: #f8c4c4;
            width: 100px;
            height: 30px;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="tit">
    MoviePedia
</div>
<div class = "searchbar">
    <a class="active" href="Home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="top10.php">Highest rated movies</a>
    <form action="response.php" method = "get">
        <label>
            <input type = "text" name = "movie" placeholder="Search...">
        </label>
        <input type = "submit" name = "submit_form" value = "search">
    </form>
</div>
<div class="container">
    <div class="leftbox">
        <img src="img/body.png" class="avatar" alt="">
        <div class="username">
            <?php echo  $_SESSION["data"][2]?>
        </div>
        <div class="birthday">
            <?php echo  $_SESSION["data"][3]?>
        </div>
<!--        <div class="followers">-->
<!--            --><?php //echo  $_SESSION["data"][9]?><!-- followers-->
<!--        </div>-->

        <form action="editProf.php">
            <button style ="text-align: center">Edit Profile</button>
        </form>
    </div>
    <div class="rightbox">
        <div class="favorites">
            <h1>Favorites</h1>
            <h2>Genre</h2>
            <p><?php echo  $_SESSION["data"][11]?></p>
            <h2>Movie</h2>
            <p><?php echo  $_SESSION["data"][5]?></p>
            <h2>TV Show</h2>
            <p><?php echo  $_SESSION["data"][6]?></p>
            <h2>Actor</h2>
            <p><?php echo  $_SESSION["data"][7]?></p>
            <h2>Director</h2>
            <p><?php echo  $_SESSION["data"][8]?></p>
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