<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
                


    
    <title>متجر كلاس ون</title>
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
            font-family: 'Tajawal', sans-serif;
                                                
        }

        .expand {
            width: 100px;
            height: 100px;
            background-color: #233064; /* Updated background color */
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            border-radius: 10px;
            animation: expandToFullScreen 1.5s forwards, disappear 1.5s 3s forwards;
            transition: all 0.5s ease-in-out;
        }

        .logo {
            width: 100px; /* Increased width */
            height: 100px; /* Increased height */
            object-fit: contain; /* Ensure the image fits within the container */
            border-radius: 5px;
            margin-bottom: 10px; /* Space between logo and text */
        }

        .brand-name {
            font-size: 20px;
            text-align: center;
        }

        @keyframes expandToFullScreen {
            0% {
                width: 100px;
                height: 100px;
            }
            100% {
                width: 100vw;
                height: 100vh;
            }
        }

        @keyframes disappear {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="expand">
        <img src="logo.png" alt="Brand Logo" class="logo"> <!-- Updated logo source -->
        <div class="brand-name" hidden>     



كلاس ون 
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.querySelector('.expand').style.display = 'none';
        }, 3000);
    </script>
</body>
</html>
