<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    header("Location: http://localhost/agileproj/index.php");
}
else{
    header("Location: http://localhost/agileproj/index.php");
}