<?php
session_start();
$menu = $_SESSION['menu'];
$tablero = $_SESSION['tablero'];
$matchmaking = $_SESSION['matchmaking'];


    if($menu == true){
        include 'menu.php';
    }
    if($tablero == true){
        include 'tablero.php';
    }
    if($matchmaking == true){
        include 'matchmaking.php';
    }
?>