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
            animation-delay: 20s; /* Delay before starting animation */
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