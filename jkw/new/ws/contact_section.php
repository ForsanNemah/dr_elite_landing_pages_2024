<section class="st-shape-wrap" id="contact">
      <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div>
      <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">ابقى على اتصال معنا </h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <div class="st-section-heading-subtitle">
            
     تواصل معنا 
          
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div id="st-alert"></div>
            <form action="post_to_google_sheet.php" class="row st-contact-form st-type1" method="post" id="contact-form-section" onsubmit="form_sender_contact_us()">
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>الاسم </label>
                  <input type="text" id="name" name="name" placeholder="ضع اسمك هنا " required>
                </div>
              </div><!-- .col -->
               

              <input type="text"   name="is_w_app" hidden value="0"   >
                <input type="text"   name="source" hidden value="website"   >
                <input type="text"   name="service" hidden    >

                

              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>الموضوع </label>
                  <input type="text"   name="subject" placeholder="الموضوع" required>
                </div>
              </div><!-- .col -->
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>رقم الجوال</label>
                  <input type="text"  id="phn_contact_us_form"  name="phone" placeholder="رقم الجوال " required>
                </div>
              </div><!-- .col -->
              <div class="col-lg-12">
                <div class="st-form-field st-style1">
                  <label>رسالتك </label>
                  <textarea cols="30" rows="10"   name="msg" placeholder="ضع رسالتك هنا "
                    required></textarea>
                </div>
              </div><!-- .col -->
              <div class="col-lg-12">
                <div class="text-center">
                  <div class="st-height-b10 st-height-lg-b10"></div>
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="save_button_contact_us" name="submit">
                    
ارسال
                  
                  </button>
                </div>
              </div><!-- .col -->
            </form>
          </div><!-- .col -->
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>










    <script>
function form_sender_contact_us() {
  //alert("The form was submitted");
  
   
  document.getElementById("save_button_contact_us").disabled = true;

  document.getElementById('save_button_contact_us').innerText = 'يرجى الإنتظار سيتم تحويلك الان';








  var event_phn=document.getElementById('phn_contact_us_form').value
 


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
