<?php 
include 'db.php';

session_start();

function isLoggedin(){
    return isset($_SESSION['user_id']);
}

function getUserInfo(){
    return $_SESSION['user'];
}

function requireLogin(){
    if (!isLoggedin()) {
        header('location : login.php');
    }
}

