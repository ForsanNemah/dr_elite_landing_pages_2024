<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Embedded Map View</title>
 
  <style>
    /* Custom CSS styling */
    /* Add your own custom styles here */
    .map-container {
      height: 400px;
      width: 100%;
      position: relative;
    }

    .map-container iframe {
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      border: 0;
    }
  </style>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.347299464901!2d49.5928226849865!3d25.393182783805354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e37968cfdb17359%3A0x9b878756736d01e!2z2YXYrNmF2Lkg2LnZitin2K_Yp9iqINin2YTYr9mD2KrZiNixINis2YXZitmEINiu2LfYp9io!5e0!3m2!1sar!2ssa!4v1709550157340!5m2!1sar!2ssa" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

 
</body>

</html>