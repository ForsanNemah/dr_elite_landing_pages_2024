<!-- Add this to the <head> section to include Font Awesome -->
 <!-- #region -->

<script>
  // Function to disable the button after submission
  function disableButtonOnSubmit2(form) {
    const button = form.querySelector('button[type="submit"]');
    button.disabled = true;
    button.innerHTML = 'جاري التحويل     ...'; // Change button text to indicate processing
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
    background-color: #2a3468; /* Red color for button */
    color: #fff;
    transition: transform 0.3s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center; /* Center text and icon */
    padding: 15px; /* Larger padding for a bigger button */
    font-size: 1.2em;
    border-radius: 8px;
    text-decoration: none;
    position: relative;
  }

  .btn-call .call-icon {
    margin-left: 10px; /* Spacing between text and WhatsApp icon */
  }

  .btn-call .maps-icon {
    position: absolute;
    right: 15px;
    font-size: 1.5em;
    color: #28a745; /* Green for Maps icon */
  }

  .btn-call:hover:not(:disabled) {
    transform: scale(1.1); /* Slightly scales up the button */
  }

  .btn-call:disabled {
    background-color: #6c757d; /* Disabled gray color */
    cursor: not-allowed;
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

<div class="container mt-12 text-center">
  <h2 class="playful-text">          
    
   زورونا الآن واطلبوا ما تحتاجونه مباشرة       
  </h2>
  <h3 hidden>
    أكل يحبه قلبك 
  </h3>

  <!-- Form 1 -->
  <div class="btn-container" data-aos="fade-right" data-aos-duration="1500">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">
      <input type="hidden" name="branch" value=" location button click    ">
      <input type="hidden" name="msg" value="location button click      ">
      <input type="hidden" name="type" value="link">
      <input type="hidden" name="phone" value="https://maps.app.goo.gl/koDRSqVMdYieDzbb6">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka University Restaurants">
     موقعنا على جوجل ماب 
        <i class="fas fa-whatsapp call-icon"></i>
        <i class="fas fa-map-marker-alt maps-icon"></i>
      </button>
    </form>
  </div>

  <!-- Form 2 -->
  <div hidden class="btn-container">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">
      <input type="hidden" name="branch" value="فرع بازوكا محاسن">
      <input type="hidden" name="msg" value="location button click فرع بازوكا محاسن">
      <input type="hidden" name="type" value="link">
      <input type="hidden" name="phone" value="https://maps.app.goo.gl/PQSuyAGdotHEcLXN6?g_st=iw">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka Mahasin Restaurants">
        فرع بازوكا محاسن 😋
        <i class="fas fa-whatsapp call-icon"></i>
        <i class="fas fa-map-marker-alt maps-icon"></i>
      </button>
    </form>
  </div>

  <!-- Form 3 -->
  <div hidden class="btn-container">
    <form action="w_app_notifi.php" method="POST" onsubmit="disableButtonOnSubmit2(this)">
      <input type="hidden" name="branch" value="فرع بازوكا الراشديه">
      <input type="hidden" name="msg" value="location button click فرع بازوكا الراشديه">
      <input type="hidden" name="type" value="link">
      <input type="hidden" name="phone" value="https://maps.app.goo.gl/HCRjp4Cx5n4KJnik6?g_st=iw">

      <button type="submit" class="btn btn-call w-100" aria-label="Submit form for Bazooka Rashidiya Restaurants">
        فرع بازوكا الراشديه 😋
        <i class="fas fa-whatsapp call-icon"></i>
        <i class="fas fa-map-marker-alt maps-icon"></i>
      </button>
    </form>
  </div>
</div>
