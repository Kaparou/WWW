<?php
session_start();

$key = "db8292289133ee000480048607d3604d";
$json = file_get_contents("https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=en-US&page=1");
$result = json_decode($json);


?>
<html lang="en">

    <title> Highest Rated Movies </title>

    <style>
        body {
            height: 230%;
        }

        about{
            position: relative;
        }

        .number{
            font-size: x-large;
        }
        .text{
            font-size: x-large;
        }

        .list_element{
            width: 30%;
            padding: 10px;
            position: absolute;
            float: left;
            display: inline-block;
            height: auto;
        }

        .right_element{
            position: absolute;
            float: right;
            right: 20%;
            height: auto%;
            width: 30%;
            padding: 10px;
            display: inline-block;
        }



    </style>
<head>
    <title>MoviePedia</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<section class = "header">
    <?php
    set_error_handler(function() { /* ignore errors */ });
    $something = $_GET["logout"];
    if ($something == 1) {
        $_SESSION["flag"] = null;
        $something = 0;
    }
    if ($_SESSION["flag"] == null) {
        echo '
		<div class = "logbt">

            <form action="userResponse.php" method = "post">
                <input type = "email" name = "email" placeholder="Email" >
                <input type = "password" name = "password" placeholder = "password">
                <input type = "submit" name = "submit" value="Log in" >
                 
           </form>
           or
           <form action="testSignup.php" method = "get">
                   <input type = "submit" name = "submit" value="Sign Up" >
           </form>
                
		</div>';}
    else {
        echo '
                   <form action="logout.php"> 
                        <button type="submit" class="logout">Log out</button>
                   </form>
                  
                  <form action="userProf.php">
                        <button type="submit" class="profile">My profile</button>
                  </form>
   
        ';}

    restore_error_handler();
    ?>
    <section class = "title">
        <em>MoviePedia</em>
    </section>

</section>
<div class = "searchbar">
    <a href="Home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a class="active" href="top10.php">Highest rated movies</a>
    <form action="response.php" method = "get">
        <label>
            <input type = "text" name = "movie" placeholder="Search...">
        </label>
        <input type = "submit" name = "submit_form" value = "search">
    </form>

</div>
<div>
    <section class = "about">
        <div class = "list_element">
            <?php
            $i = 0;
            while($i<5){
            ?>
            <div class = "number"><?php echo ($i+1)?>.</div>
            <?php
            $m_id= $result->results[$i]->id;
            $poster_path = $result->results[$i]->poster_path;
            $poster_url = "https://image.tmdb.org/t/p/w92$poster_path";
            $title = $result->results[$i]->title;
            $description = $result->results[$i]->overview;
            $vote = $result->results[$i]->vote_average;
            ?>
            <img src ="<?php echo $poster_url?>" alt="">
            <a href="movie_page.php?%20json=<?php echo $title?>" class = "text"><?php echo $title?></a>
            <div class = "text">Overview:<br> <?php echo $description?></div>
            <div class = "text">Rating: <?php echo $vote?></div><br><br>
            <?php $i++;} ?>
        </div>
        <div class="right_element">
            <?php
            $i = 5;
            while($i<10){
                ?>
                <div class = "number"><?php echo ($i+1)?>.</div>
                <?php
                $m_id= $result->results[$i]->id;
                $poster_path = $result->results[$i]->poster_path;
                $poster_url = "https://image.tmdb.org/t/p/w92$poster_path";
                $title = $result->results[$i]->title;
                $description = $result->results[$i]->overview;
                $vote = $result->results[$i]->vote_average;
                ?>
                <img src ="<?php echo $poster_url?>" alt="">
                <a href="movie_page.php?%20json=<?php echo $title?>" class = "text"><?php echo $title?></a>
                <div class = "text">Overview:<br> <?php echo $description?></div>
                <div class = "text">Rating: <?php echo $vote?></div><br><br>
                <?php $i++;} ?>
        </div>

    </section>




</div>
</body>


</html>
