<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <title>Responsive Image Landing Page</title>
  <style>
    .image-container {
      position: relative;
    }

    .booking-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="image-container">
          <img src="vi.webp" class="img-fluid" alt="Responsive Image">
          <a href="#" class="btn btn-primary booking-button">Book Now</a>
        </div>
      </div>
    </div>
    <!-- Add the rest of your landing page content here -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>