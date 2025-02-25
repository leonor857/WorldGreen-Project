<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

function loadPage($page) {
    switch ($page) {
        case 'home':
            include 'file_/home.php';
            break;
        default:
            echo "404 - Halaman tidak ditemukan";
            break;
    }
}

loadPage($page);
?>
