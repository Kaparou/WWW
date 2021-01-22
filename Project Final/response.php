<?php

set_error_handler(function() { /* ignore errors */ });
$movie=$_GET['movie'];
if ($_GET['submit_form'] == "search") {
    $movie = rawurlencode($movie);
}

$key = "db8292289133ee000480048607d3604d";
$json = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=$key&language=en-US&query=$movie&page=1&include_adult=false");
$result = json_decode($json);
$title = $result->results[0]->title;
$title = rawurlencode($title);


if ($_GET['submit_form'] == "search") {
    if ($result->total_results == 0){
        header('Location: error.php');
    }
    else{
        header('Location: movie_page.php? json=' .$title);
    }
}
else {
    header ('Location: Reviews.php? json=' .$title);
}
restore_error_handler();
die;
