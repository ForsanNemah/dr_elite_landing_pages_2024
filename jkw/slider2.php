<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Slider with Centered Caption</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .image-slider {
      margin-top: 50px;
    }

    .image-slider .carousel-item {
      display: flex;
      align-items: center;
    }

    .image-slider .carousel-item img {
      max-width: 100%;
      height: auto;
    }

    .image-slider .carousel-caption {
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 20px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 300px; /* Adjust the width as needed */
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row image-slider">
      <div class="col-md-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image1.jpg" class="d-block w-100" alt="Image 1">
              <div class="carousel-caption">
                <h5>Caption 1</h5>
                <p>Description of image 1.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image2.jpg" class="d-block w-100" alt="Image 2">
              <div class="carousel-caption">
                <h5>Caption 2</h5>
                <p>Description of image 2.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image3.jpg" class="d-block w-100" alt="Image 3">
              <div class="carousel-caption">
                <h5>Caption 3</h5>
                <p>Description of image 3.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>