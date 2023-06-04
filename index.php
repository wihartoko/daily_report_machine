<?php
include "koneksi.php";


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Produksi</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <h3 class="text-uppercase text-center mt-4">production proccess</h3>
    <h3 class="text-uppercase text-center">pt mobat mabit golet duit</h3>
    <hr class="mb-5">


    <div class="container ">
        <h4>Main Menu</h4>
        <div class="kotak">
            <h3><a href="laporan_harian_mesin/input_laporan.php"> <button class="btn btn-light">Input laporan Harian Mesin</button></a></h3>
        </div>
        <div class="kotak">
            <h3><a href="tracking_unit/input_data.php"> <button class="btn btn-light">Tracking Unit</button></a></h3>
        </div>
        <div class="kotak">
            <h3><a href="tracking_unit/data_produksi.php"> <button class="btn btn-light">Data Produksi</button></a></h3>
        </div>
        <div class="kotak">
            <h3><a href="riject/input_riject.php"> <button class="btn btn-light">Input Reject</button></a></h3>
        </div>
        <div class="kotak">
            <h3><a href="work_instruction.php"> <button class="btn btn-light">Work Instruction</button></a></h3>
        </div>
        <div class="kotak">
            <h3><a href="about.php"> <button class="btn btn-light">About</button></a></h3>
        </div>
    </div>



    <!-- close container -->
    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>