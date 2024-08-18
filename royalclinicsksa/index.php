<?php

// Get the token from the GET request
$token = $_GET['token'];

// Redirect to the specified URL
header("Location: https://www.royalclinicsksa.com:4431/View/Royal/LandPage.aspx?token=$token");

?>