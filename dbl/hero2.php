
<div >
    <div class="text-center image-container">
      <img src="images/bv.png" alt="Book Image Mobile" class="img-fluid mobile-image">
      <img src="images/bh.jpeg" alt="Book Image Desktop" class="img-fluid desktop-image">
      <a href="#myform">


      <button class="btn btn-primary centered-button btn-booking rounded-pill pulsate"> حجز استشارة مجانية</button>

      </a>
     
    </div>
  </div>









  <style>





.container {
      
      justify-content: center;
      align-items: center;
      
      
    }
  
    .image-container {
      position: relative;
    }
  
    .centered-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, 250%);
    }
  
    @media (max-width: 768px) {
      .desktop-image {
        display: none;
      }
  
  
      .centered-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -300%);
    }
  
  
  
  
  
    }
  
    @media (min-width: 769px) {
      .mobile-image {
        display: none;
      }
  
  
  
      .centered-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 300%);
      }
  
      
  
  
  
      
    }
  
  
  
    .btn-booking {
      font-size: 20px;
      
      /* Add any additional styles as needed */
    }
  
  
    body{
  
      font-family: 'Tajawal', sans-serif;
      font-weight:500;
     
                                                  
  
    }
  
  </style>