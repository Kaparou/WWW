<?php session_start();?>
<html lang="en">

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
            session_destroy();
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

<section class = "foot"></section>


</body>


</html>