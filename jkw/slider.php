<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Slider</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styling */
        /* Add your own custom styles here */
        .carousel-caption {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .animated-button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            overflow: hidden;
            transition: all 0.4s ease-in-out;
        }

        .animated-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.3);
            transition: all 0.4s ease-in-out;
        }

        .animated-button:hover {
            background-color: #fff;
            color: #007bff;
        }

        .animated-button:hover::before {
            left: 0%;
        }
    </style>
</head>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption">
                    <h4>Caption Above</h4>
                    <a href="#" class="animated-button">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/source-404?fit=crop&fm=jpg&h=800&q=60&w=1200" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption">
                    <h4>Caption Above</h4>
                    <a href="#" class="animated-button">Book Now</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>