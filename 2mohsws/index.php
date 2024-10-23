<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>       طموح لتقنية المعلومات   </title>

  <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    
  









  <style>
    /* Make sure the video takes the full width and height of the viewport */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }

    .video-background {
      margin-top: 0px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures the video covers the entire background */
      z-index: -1; /* Places it behind other content */
    }

    .content {
      position: relative;
      z-index: 1; /* Ensures content appears above the video */
      color: white;
      text-align: center;
      padding: 20px;
    }
  </style>











</head>

<body>









<video class="video-background " autoplay muted loop>
    <source src="header_bg.webm" type="video/webm">
    Your browser does not support HTML5 video.
  </video>










<?php

include "w_app.php";


?>



  <div class="container">


    <div class="mt-5 text-center">
      <img src="logo.jpeg" alt="Logo" class="img-fluid " width="200" height="200">
      <h1 class="mt-4 pulsate" >     طموح لتقنية المعلومات    </h1>
    </div>
    
    <div class="mt-5 text-center">


    <?php include "get_urls.php" ?>
    
 
<br>
<br>
<a hidden href="https://drive.google.com/file/d/1PhQlWHRyJRSuBw7lFUAyXNHhhWhxKAur/view" class="btn btn-primary btn-lg col-6"> منيو وجبات الشركات </a>
     
    </div>



  </div>

  <footer class="mt-5 text-center bg-light" hidden>
    <div class="container">
      <ul class="list-inline">

      


        <li class="list-inline-item " style="font-size:30px">
          <a href="https://www.facebook.com/dallakershaik/"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="list-inline-item" style="font-size:30px">
          <a href="https://twitter.com/dl3_kershk?lang=ar"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="list-inline-item" style="font-size:30px">
          <a href="https://www.instagram.com/dalaakershaik"><i class="fa fa-instagram"></i></a>
        </li>
        <li class="list-inline-item" style="font-size:30px">
          <a href="https://www.snapchat.com/add/dkr_ksa"><i class="fa fa-snapchat"></i></a>
        </li>
      </ul>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
</body>


<style>


a {
    color: #dc3545;
    text-decoration: none;
    background-color: transparent;
}


.pulsate {
    -webkit-animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.5;
    color: white;
}
@-webkit-keyframes pulsate {
    0% { 
        opacity: 0.5;
    }
    50% { 
        opacity: 1.0;
    }
    100% { 
        opacity: 0.5;
    }


</style>


</html>