<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Centered Video</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Ensure full height for centering */
    html, body {
      height: 100%;
      margin: 0;
    }

    /* Video container takes full height */
    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Full viewport height */
      padding: 15px; /* Add some padding for smaller devices */
    }

    /* Ensure the video is responsive */
    video {
      width: 100%;
      max-width: 100%;  /* Constrain width to container */
      height: auto;     /* Maintain aspect ratio */
    }
  </style>
</head>
<body>
  <div class="video-container">
    <div class="embed-responsive embed-responsive-16by9">
      <video class="embed-responsive-item" controls>
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
