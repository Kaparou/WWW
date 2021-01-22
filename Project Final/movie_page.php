<?php

$title=$_GET['json'];

$title = rawurlencode($title);

$key = "db8292289133ee000480048607d3604d";
$json = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=$key&language=en-US&query=$title&page=1&include_adult=false");
$result = json_decode($json);

$description = $result->results[0]->overview;
$m_id= $result->results[0]->id;
$poster_path = $result->results[0]->poster_path;
$poster_url = "https://image.tmdb.org/t/p/w500$poster_path";


$json2 = file_get_contents("https://api.themoviedb.org/3/movie/$m_id/credits?api_key=$key&language=en-US");
$cast = json_decode($json2);


$json3 = file_get_contents("https://api.themoviedb.org/3/movie/$m_id?api_key=$key&language=en-US");
$details = json_decode($json3);


$json4 = file_get_contents("https://api.themoviedb.org/3/movie/$m_id/reviews?api_key=$key&language=en-US&page=1");
$review = json_decode($json4);



?>
<html lang="en">

<head>
    <title> <?php echo rawurldecode($title)?> </title>

    <style>
        body {
            height: 100%;

        }

        .bg_image
        {
            position: relative;
            top: 0;
            left: 0;
            filter: blur(10px);
            -webkit-filter: blur(10px);
            height:100%;
            width:100%;
            opacity: 1.5;
        }
        .image
        {
            position: absolute;
            top: 10%;
            left: 5%;
            height:80%;
            width:35%;
        }
        .text {
            position: absolute;
            top:10%;
            left:45%;
            height:20%;
            color:white;

        }
        .text .title {
            font-size:60px;
            mix-blend-mode: difference;
        }
        .text .description {
            font-size:25px;
            mix-blend-mode: difference;
        }
        .text .info {
            font-size:18px;
            mix-blend-mode: difference;

        }
        textarea{
            resize: none;
            border: none;
            background-color: transparent;
            outline: none;
            mix-blend-mode: difference;
            color: white;


        }
        .text review {
            text-align:center;
            font-size:20px;
            color: white;
            mix-blend-mode: difference;
        }


    </style>



</head>


<body>


<div style="position: relative; left:0; top:0;">
    <img src= '<?php echo $poster_url?>' class = "bg_image" alt=""/>
    <img src= '<?php echo $poster_url?>' class = "image" alt=""/>
</div>
<div class = "text">
    <div class = "title"><?php echo rawurldecode($title)?></div>
    <p class = "description"><?php echo $description?><br><br></p>
    <p class = "info">Director: <?php
        $director=$cast->crew[0]->name;
        echo "$director";?>
        <br>Actors:
        <?php $len = sizeof($cast->cast);
        $c_names = $cast->cast[0]->name;
        echo "$c_names ,";
        $i=1;
        while ($i<$len && $i<30){
            $c_names = $cast->cast[$i]->name;
            echo", $c_names ";
            $i++;
        }?>
        <br>Genre: <?php $len = sizeof($details->genres);
        $i=0;
        while ($i<$len){
            $genre = $details->genres[$i]->name;
            echo"$genre, ";
            $i++;
        }?>
        <br>Duration: <?php echo $details->runtime?>
        <br>Rating: <?php echo $details->vote_average?>
        <br>Year: <?php echo $details->release_date?></p>
    <h1>Review 1</h1>
    <label for="Review"></label><textarea readonly id="Review" name="Review" rows="11" cols="140">
        <?php
            set_error_handler(function() { /* ignore errors */ });
            if($review->results[0]->content!=NULL){
                echo $review->results[0]->content;
            }
            else{
                echo ("No official reviews yet.");
            }
                restore_error_handler();
            ?>
    </textarea>
    <form  action="response.php" method = "get">
        <input type = "submit" name = "submit_form" value = "Watch user's reviews">
        <input type = "hidden" name = "movie" value ="<?php echo $title?>">
    </form>
    <form action = "Home.php">
        <button type = 'submit' name = 'Homesubmit'>Home</button>

    </form>


</div>
</body>


</html>


