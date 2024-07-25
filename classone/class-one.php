<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom Out Screen with Logo</title>
    <!-- Include the Tejwal font from Fontsource CDN -->
    <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: 'Tajawal';
        }

        .zoom-out {
            width: 100vw;
            height: 100vh;
            background-color: #233064; /* Updated background color */
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            border-radius: 0; /* Full-screen corners */
            animation: zoomOut 3s forwards;
            animation-delay: 1s; /* Delay before starting animation */
            transition: all 0.5s ease-in-out;
        }

        .logo {
            width: 200px; /* Increased width */
            height: 250px; /* Increased height */
            object-fit: contain; /* Ensure the image fits within the container */
            border-radius: 0px;
            margin-bottom: 0px; /* Space between logo and text */
        }

        .brand-name {
            font-size: 24px;
            text-align: center;
             
        }

        @keyframes zoomOut {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(0);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="zoom-out">
        <img src="logo.png" alt="Brand Logo" class="logo"> <!-- Updated logo source -->
        <div    class="brand-name">






        </div>







        <div clss="container">

      




        <h3 class="centered-text">

        كلاس ون للشوكلاته الفاخرة
        </h3>

        
        <h3 class="centered-text">



ثقة - إبداع - تميز



</h3>
 


  
    </div>







   




 


     




   



    





 

 
 






    </div>



   

    <script>
        // The display is set to 'none' after the animation completes
        setTimeout(() => {
            document.querySelector('.zoom-out').style.display = 'none';
        }, 5000); // Total time = 2s delay + 3s animation
    </script>
</body>
</html>





<style>
    .centered-text {
        display: flex;
        justify-content: center;
    }
  </style>
