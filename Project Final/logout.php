<?php
    session_start();
    session_destroy();
    //$_SESSION["flag"] = 0;
    header('Location: Home.php');
