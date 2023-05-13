<?php
require_once 'admin/dbkoneksi.php';

$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
        <link rel="stylesheet" href="style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="package/swiper-bundle.min.css" />
        <title>Equipify - Simplify your gym needs.</title>
        <style>
            .quantity-wrapper button:hover{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <!-- HEADER NAVIGASI -->

        <header id="header-nav">
            <div class="logo-header">
                <a href="?page=main.php#home">
                    <img src="images/equipify-logo.svg" alt="" />
                    <div class="logo-text">QUIPIFY</div>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="admin/login.html"><i class="bi bi-box-arrow-in-right"></i></a></li>
                    <li>
                        <a href="?page=main.php#product"><i class="bi bi-cart2"></i></a>
                    </li>
                    <li><a href="?page=main.php#about">About Us</a></li>
                    
                </ul>
            </nav>
        </header>