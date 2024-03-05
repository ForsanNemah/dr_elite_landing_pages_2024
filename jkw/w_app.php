<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Floating WhatsApp Button</title>
 
  <style>
    /* Custom CSS styling */
    /* Add your own custom styles here */
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
    }

    .whatsapp-float a {
      display: block;
      background-color: #25d366;
      color: #fff;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      text-align: center;
      line-height: 60px;
      font-size: 24px;
      transition: all 0.3s ease-in-out;
    }

    .whatsapp-float a:hover {
      background-color: #128c7e;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container mt-4">
     
    <!-- Floating WhatsApp button -->
    <div class="whatsapp-float">
      <a href="https://web.whatsapp.com/send?phone=1234567890" target="_blank">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>

   
</body>

</html>