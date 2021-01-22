<?php
session_start();
set_error_handler(function() { /* ignore errors */ });
$msg = $_GET['msg'];
//echo $msg;
if($msg!=null){
    echo "<script>alert(' $msg ');</script>";
}
restore_error_handler();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Settings</title>
    <link rel="stylesheet" href="css/style_edit_profile.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<div class="tit">
    MoviePedia
</div>
<form action="userProf.php">
    <button type="submit" class="profile">My profile</button>
</form>
<div class = "searchbar">
    <a href="Home.php">Home</a>
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
        <nav>
            <a onclick="tabs(0)"
               class="tab active">
                <i class="fa fa-user"></i>
                <a onclick="tabs(1)"
                   class="tab">
                    <i class="fa fa-key"></i>
                </a>
            </a>
            <a onclick="tabs(2)"
               class="tab">
                <i class="fa fa-tasks"></i>
            </a>
            <a onclick="tabs(3)"
               class="tab">
                <i class="fa fa-sign-out-alt"></i>
            </a>
        </nav>
    </div>
    <div class="rightbox">
        <div class="profile tabShow">
            <h1>Personal Info</h1>
            <form action="saveChanges.php" method="post">

                <label>
                    <input type="password" class="input" name = "old" style = "display: none" >
                </label>
                <label>
                    <input type="text" class="input" name = "genre" style = "display: none" value = "<?php echo $_SESSION["data"][11];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favmovie" style = "display: none" value= "<?php echo $_SESSION["data"][5];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favtvshow" style = "display: none" value= "<?php echo $_SESSION["data"][6];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favactor" style = "display: none" value= "<?php echo $_SESSION["data"][7];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favdirector" style = "display: none" value= "<?php echo $_SESSION["data"][8];?>">
                </label>

                <h2>Full Name</h2>
                <label>
                    <input type="text" class="input" name = "fullName" value= "<?php echo $_SESSION["data"][2];?>">
                </label>
                <h2>Birthday</h2>
                <label>
                    <input type="date" class="input" name = "birthday" value= "<?php echo $_SESSION["data"][3];?>">
                </label>


                <button class="btn">Save Changes</button>
            </form>
        </div>

        <div class="password tabShow">
            <h1>Change Password</h1>
            <h2>Old Password</h2>
            <form action="saveChanges.php" method="post">

                <label>
                    <input type="password" class="input" name = "old">
                </label>
                <h2>New Password</h2>
                <label>
                    <input type="password" class="input" name = "new">
                </label>
                <h2>Confirm New Password</h2>
                <label>
                    <input type="password" class="input" name = "confnew">
                </label>
                <label>
                    <input type="text" class="input" name = "fullName" style = "display: none" value = "<?php echo $_SESSION["data"][2];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "birthday" style = "display: none" value = <?php echo $_SESSION["data"][3];?>>
                </label>

                <label>
                    <input type="text" class="input" name = "genre" style = "display: none" value = "<?php echo $_SESSION["data"][11];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favmovie" style = "display: none" value= "<?php echo $_SESSION["data"][5];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favtvshow" style = "display: none" value= "<?php echo $_SESSION["data"][6];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favactor" style = "display: none" value= "<?php echo $_SESSION["data"][7];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "favdirector" style = "display: none" value= "<?php echo $_SESSION["data"][8];?>">
                </label>

                <button class="btn">Save Changes</button>
            </form>
        </div>

        <div class="favorites tabShow">
            <h1>Favorites</h1>
            <h2>Genre</h2>
            <form action="saveChanges.php" method="post">

                <label>
                    <input type="password" class="input" style = "display: none" name = "old">
                </label>
                <label>
                    <input type="password" class="input" style = "display: none" name = "new" >
                </label>
                <label>
                    <input type="password" class="input" style = "display: none" name = "confnew" >
                </label>
                <label>
                    <input type="text" class="input" name = "fullName" style = "display: none;" value = "<?php echo $_SESSION["data"][2];?>">
                </label>
                <label>
                    <input type="text" class="input" name = "birthday" style = "display: none;" value = "<?php echo $_SESSION["data"][3];?>">
                </label>

                <label>
                    <input type="text" class="input" name = "genre" value = "<?php echo $_SESSION["data"][11];?>">
                </label>
                <h2>Movie</h2>
                <label>
                    <input type="text" class="input" name = "favmovie" value= "<?php echo $_SESSION["data"][5];?>">
                </label>
                <h2>TV Show</h2>
                <label>
                    <input type="text" class="input" name = "favtvshow" value= "<?php echo $_SESSION["data"][6];?>">
                </label>
                <h2>Actor</h2>
                <label>
                    <input type="text" class="input" name = "favactor" value= "<?php echo $_SESSION["data"][7];?>">
                </label>
                <h2>Director</h2>
                <label>
                    <input type="text" class="input" name = "favdirector" value= "<?php echo $_SESSION["data"][8];?>">
                </label>

                <button class="btn">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type = "text/javascript">

    const tabBtn = document.querySelectorAll(".tab");
    const tab = document.querySelectorAll(".tabShow");

    function tabs(panelIndex) {
        tab.forEach(function(node) {
            node.style.display = "none";
        });
        if (panelIndex != 3) {
            tab[panelIndex].style.display = "block";
        }else{
            window.location.replace("Home.php?logout=1");
        }
    }
    tabs(0);
</script>
<script>
    $(".tab").click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    })
</script>
</body>
</html>