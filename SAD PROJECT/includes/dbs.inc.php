<?php

$severNames = "localhost";
$dBUsernames = "root";
$dBPasswords = "";
$dBNames = "AISaccount";

$conn = mysqli_connect($severNames, $dBUsernames, $dBPasswords, $dBNames);

if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}