<?php 
    session_start();
    include 'admin/connection/connection.php';
?>

<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Meyawo Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="asset/fe/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="asset/fe/assets/css/meyawo.css">
</head>
<body>
    <!-- Start Navbar/Navigation -->
    <?php include 'inc/nav.php' ?>
    <!-- End Navbar/Navigation -->

    <!-- Start Header -->
    <?php include 'inc/header.php' ?>
    <!-- Start Header -->

    <!-- Start Home -->
    <?php
        if (isset($_GET['pg'])) {
            if (file_exists('content/' . $_GET['pg'] . '.php')) {
                include 'content/' . $_GET['pg'] . '.php';
            }
        }else{
            include 'content/home.php';
        }
    ?>
    <!-- End Home -->

    <!-- Start Footer Section -->
    <?php include 'inc/footer.php' ?>
    <!-- End Footer Section -->	

    <!-- core  -->
    <script src="asset/fe/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="asset/fe/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="asset/fe/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="asset/fe/assets/js/meyawo.js"></script>
</body>
</html>
