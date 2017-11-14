<?php
    session_start();

    if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
        echo "<h1>welkom " . $_SESSION["user"]["naam"] . " op het admingedeelte van de website</h1>";
        echo "<p><a href='loginformulier.php'>inloggen</a></p>";
    } else {
        header('location: loginformulier.php');
    }
