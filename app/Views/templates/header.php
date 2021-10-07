<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Villondo CSS -->
    <link href="assets/css/mystyle.css" rel='stylesheet' type='text/css'>

    <title>The Barn</title>

</head>

<body>
    <div class="container">
        <!-- Header -->

        <div class="row header">
            <div class="col-lg-8 col-sm-6">
                <h2 class="the-barn-title">THE BARN</h2>
            </div>
            <div class="col-lg-4 col-sm-6 by-it">
                <span>BY IT461 G1 - Advance Web Systems</span>
            </div>
        </div>

        <!-- Top Navigation: Bootstarp Implementation -->
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0 text-center" id="navbarContent">
                <ul class="navbar-nav text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/userblog">My Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Favorite Sites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>