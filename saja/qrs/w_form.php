<script>
  // Function to disable the button after submission
  function disableButtonOnSubmit2(form) {
    const button = form.querySelector('button[type="submit"]');
    button.disabled = true;
    button.innerHTML = 'جاري التحويل      ...'; // Change button text to indicate processing
  }
</script>

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

  .btn-call:hover:not(:disabled) {
    transform: scale(1.1); /* Slightly scales up the button */
  }

  .btn-call:disabled {
    background-color: #6c757d; /* Disabled gray color */
    cursor: not-allowed;
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

<div class="container mt-5 text-center">
  <h2  hidden class="playful-text">          
    😋 اطلب الان عبر واتساب  من الفرع الأقرب لك 😋
  </h2>
  <h3>
    🛵 خدمة توصيل سريعة 🛵
  </h3>

  <!-- Form 1 -->
  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">

      <input type="hidden" name="branch" value=" المنيو    ">
      
      <input type="hidden" name="msg" value="whatsapp button click   المنيو ">
      <input type="hidden" name="type" value="wapp">
  <input type="hidden" name="phone" value="https://drive.google.com/file/d/11QrhSBKoqYsc1WTPkH9Qtbakce4zTbUg/view">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
      المنيو
      </button>
    </form>
  </div>


















  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">

      <input type="hidden" name="branch" value=" العروض    ">
      
      <input type="hidden" name="msg" value="whatsapp button click   العروض ">
      <input type="hidden" name="type" value="wapp">
  <input type="hidden" name="phone" value="https://api.whatsapp.com/send?phone=966539411002&text=%D8%A7%D9%84%D8%B1%D8%AC%D8%A7%D8%A1%20%D8%A7%D8%B7%D9%84%D8%A7%D8%B9%D9%8A%20%D8%A8%D8%A7%D9%84%D8%B9%D8%B1%D9%88%D8%B6%20%D8%A7%D9%84%D9%85%D8%AA%D9%88%D9%81%D8%B1%D8%A9">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
      العروض
      </button>
    </form>
  </div>




  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">

      <input type="hidden" name="branch" value=" جدول المباريات المهمه     ">
      
      <input type="hidden" name="msg" value="whatsapp button click   جدول المباريات المهمه  ">
      <input type="hidden" name="type" value="wapp">
  <input type="hidden" name="phone" value="https://api.whatsapp.com/send?phone=966539411002&text=%D8%A7%D9%84%D8%B1%D8%AC%D8%A7%D8%A1%20%D8%A7%D8%B1%D8%B3%D8%A7%D9%84%20%D9%82%D8%A7%D8%A6%D9%85%D8%A9%20%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%B1%D9%8A%D8%A7%D8%AA%20%D8%A7%D9%84%D9%85%D9%87%D9%85%D8%A9%20">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
      جدول المباريات المهمه 
      </button>
    </form>
  </div>









  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">

      <input type="hidden" name="branch" value=" المكتبه الالكترونيه    ">
      
      <input type="hidden" name="msg" value="whatsapp button click   المكتبه الالكترونيه ">
      <input type="hidden" name="type" value="wapp">
  <input type="hidden" name="phone" value="">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
      المكتبه الالكترونيه 
      </button>
    </form>
  </div>










  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">

      <input type="hidden" name="branch" value=" الشكاوى    ">
      
      <input type="hidden" name="msg" value="whatsapp button click   الشكاوى ">
      <input type="hidden" name="type" value="wapp">
  <input type="hidden" name="phone" value="https://api.whatsapp.com/send?phone=966539411002&text=%D9%84%D8%AF%D9%8A%20%D8%B4%D9%83%D9%88%D9%89%20%20%D8%A2%D9%85%D9%84%20%D8%A8%D8%B3%D8%B1%D8%B9%D8%A9%20%D8%A7%D9%84%D8%B1%D8%AF%20%D9%81%D9%8A%20%D8%A7%D8%B3%D8%B1%D8%B9%20%D9%88%D9%82%D8%AA%20">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
      الشكاوى
      </button>
    </form>
  </div>










  <!-- Form 2 -->
  <div hidden class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">
      <input type="hidden" name="branch" value="فرع بازوكا محاسن">
      <input type="hidden" name="msg" value=" whatsapp button click فرع بازوكا محاسن">
      <input type="hidden" name="type" value="wapp">
      <input type="hidden" name="phone" value="966536129993">
      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka Mahasin Restaurants">
        فرع بازوكا محاسن 😋
      </button>
    </form>
  </div>

  <!-- Form 3 -->
  <div hidden class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">
      <input type="hidden" name="branch" value="فرع بازوكا الراشديه">
      <input type="hidden" name="msg" value=" whatsapp button click فرع بازوكا الراشديه">
      <input type="hidden" name="type" value="wapp">
        <input type="hidden" name="phone" value="966531599960">
      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka Rashidiya Restaurants">
        فرع بازوكا الراشديه 😋
      </button>
    </form>
  </div>
</div>
