<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : "home";

function loadPage($page) {
    if ($page === 'home') {
        include 'file_/home.php';
    } else if ($page === 'login') {
        include 'file_/login.php';
    } else if ($page === 'logout') {
        include 'file_/logout.php';
    } else if ($page === 'register') {
        include 'file_/register.php';
    } else if ($page === 'about') {
        include 'file_/about.php';
    } else if ($page === 'produk') {
        include 'file_/produk.php';
    } else {
        include 'file_/404/not_found_1.php';
    }
}

loadPage($page);
?>
