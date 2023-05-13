<?php
include_once('header.php');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // Default Content Main Page
    $page = 'main.php';
}
include_once($page);

include_once('footer.php');
?>
