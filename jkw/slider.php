<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Slider</title>
 
  <style>
    /* Custom CSS styling */
    /* Add your own custom styles here */
    .carousel-caption {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(30%, -50%);


 
    
    color: #000;
 
  white-space: nowrap;
    
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

    .center-button {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" mt-4>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slider1.jpeg" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption">
          <h4>مجمع عيادات الدكتور جميل خطاب
</h4>

<h2>  أكبر الاطباء الاستشاريين   
          </h2>

<h2>في المملكة العربية السعوديه</h2>



<div class="center-button mb-4 mt-4">
    <button class="btn btn-primary">حجز موعد</button>
  </div>



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

  
 
</body>

</html>