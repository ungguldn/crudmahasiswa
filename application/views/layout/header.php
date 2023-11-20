<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <?php 
                        if ($user['role'] == 'Admin') { ?>
                        <li class="nav-item"><a class="nav-link" href="#services">Dasboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Mahasiswa/')?>#mahasiswa">Mahasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Prodi/')?>#prodi">Prodi</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Auth/logout')?>">Logout</a></li>
                        <?php } else {
                            ?>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Profil/')?>">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= site_url('Auth/logout')?>">Logout</a></li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </nav>