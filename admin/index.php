<?php 
include '../config.php';

//session

session_start();

//cek

if($_SESSION['status']!="login"){

    header("location:../index.php");

}

echo "<br>";
echo "Selamat Datang di halaman :".$_SESSION['username']; 
echo "<br>";
echo "<br>";
echo "<br>";

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
background-color: yellowgreen;
        }
    </style>
</head>
<body>

    <center><h2>SELAMAT DATANG DI WEB SAYA ARIL WIBOWO </h2></center>
   <center><h2>TERIMA KASIH TELAH BERKUNJUNG</h2></center>

    
 <center><a href="logout.php">LOGOUT</a></center>
 </body>
 </html>