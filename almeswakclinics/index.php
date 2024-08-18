<?php

// Get the token from the GET request
$token = $_GET['token'];

// Redirect to the specified URL
header("Location: https://www.almeswakclinics.com:44319/View/Almeswak/LandPage.aspx?token=$token");

?>