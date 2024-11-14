 
  <style>
    /* Style for the header text */
    .playful-text {
      font-size: 2em;
      font-weight: bold;
      background: linear-gradient(90deg, #ff69b4, #ff4500);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      animation: bounce 1.5s infinite;
    }

    /* Bounce animation */
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }

    /* Style for the call buttons */
    .btn-call {
      background-color: #dc3545; /* Red color for button */
      color: #fff;
      transition: transform 0.3s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: center; /* Center text and icon */
      padding: 15px; /* Larger padding for a bigger button */
      font-size: 1.2em;
      border-radius: 8px;
      text-decoration: none;
    }

    .btn-call:hover {
      transform: scale(1.1); /* Slightly scales up the button */
    }

    /* Style for the call icon */
    .btn-call .call-icon {
      color: #28a745 !important; /* Green color for call icon */
    }

    /* Spacing between buttons */
    .btn-container {
      margin-bottom: 15px;
    }

    /* Adjust button width on smaller screens */
    @media (max-width: 576px) {
      .btn-call {
        font-size: 1em;
        padding: 10px;
      }
    }
  </style>
c

  <div class="container mt-5 text-center">
    <h2 class="playful-text">          
      😋 اطلب الان من الفرع الأقرب لك 😋
    </h2>
    <h3>
    🛵 توصيل سريع ومجاني 🛵
    </h3>

    <!-- Button 1 -->
    <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
      <a href="tel:+0508029993" class="btn btn-call w-100" aria-label="Call Bazooka University Restaurants">
        فرع  بازوكا الجامعيين 😋
      </a>
    </div>
    
    <!-- Button 2 -->
    <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
      <a href="tel:+0536129993" class="btn btn-call w-100" aria-label="Call Bazooka Mahasin Restaurants">
         فرع بازوكا محاسن😋
      </a>
    </div>

    <!-- Button 3 -->
    <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
      <a href="tel:+0531599960" class="btn btn-call w-100" aria-label="Call Bazooka Rashidiya Restaurants">
          فرع بازوكا الراشديه😋
      </a>
    </div>
  </div>

 
