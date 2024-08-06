<section class="st-news-letter-section st-dynamic-bg st-bg" data-src="assets/img/news-letter-bg.png">
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">اشترك وابقى على اتصال </h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <div class="st-section-heading-subtitle">
            
       اشترك معنا عبر  رقم وتساب لتصلك عروضنا اولا باول 
          
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="st-news-letter">
              <form class="mailchimp st-news-letter-form" action="post" onsubmit="form_sender_subscribe()" action="post_to_google_sheet.php">
                <input type="phone" name="phone" id="subscriber-email" placeholder="ضع رقمك  الوتساب هنا">
                <button type="submit" id="save_button_subscribe" class="st-mailchimp-btn"><i
                    class="fas fa-paper-plane"></i></button>
                <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                <h5 class="subscription-success"> .</h5>
                <h5 class="subscription-error"> .</h5>
                <label class="subscription-label" for="subscriber-email"></label>
              </form>
              <div class="st-news-letter-number">





<?php

echo $phone;


?>






              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
















    <script>
function form_sender_subscribe() {
  //alert("The form was submitted");
  
   
  document.getElementById("save_button_subscribe").disabled = true;

  document.getElementById('save_button_subscribe').innerText = 'يرجى الإنتظار سيتم تحويلك الان';








  var event_phn=document.getElementById('subscriber-email').value
 


  /*
  snaptr('track','SIGN_UP', {
  
    'user_phone_number': sha256("966"+event_phn)          
});
*/







/*


ttq.identify({
 
	"phone_number":sha256("966"+event_phn)  // string. The phone number of the customer if available. It must be hashed with SHA-256 on the client side.
 
});


ttq.track('CompleteRegistration', {});





//alert("submited"+event_phn);


*/


}
</script>
