<?php
session_start();
if(isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website</h1>";
    echo "<p><a href='loginformulier.php'>terug naar login</a></p>";
} else {
    header('location: loginformulier.php');
}
