
<section id="appointment" class="st-shape-wrap st-gray-bg">
      <div class="st-shape4">
        
      </div>
      <div class="st-shape6">
        <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">حجز موعد</h2>
          
          <div class="st-seperator">
 
 
          </div>
          <div class="st-section-heading-subtitle">
            
      سجل بياناتك وسيتم التواصل معك في اسرع وقت
          
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container  ">
        <div class="row form-container">
          <div class="col-lg-10 offset-lg-1">
            <form method="POST" onsubmit="form_sender()" action="post_to_google_sheet.php" class="st-appointment-form" id="appointment-form-services">
              <div id="st-alert1"></div>
              <div class="row mt-4" >
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label hidden>الاسم</label>
                    <input type="text" id="uname" name="name" placeholder=" ضع اسمك هنا " required>
                  </div>
                </div>
                
                <input type="text"   name="is_w_app" hidden value="0"   >
                <input type="text"   name="source" hidden value="website"   >




                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label hidden>رقم الجوال</label>
                    <input type="number" id="phn_form1" name="phone" placeholder="رقم الجوال " required>
                  </div>
                </div>
                


                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label hidden>القسم  </label>
                    <div class="st-custom-select-wrap">
                      <select name="service" id="udepartment" class="form-control"
                        data-placeholder="اختر القسم">
                        
                        <option value="derma"> اختر القسم</option>
                        <option value="derma">الجلدية</option>
                        <option value="tagmeel">تجميل</option>
                        <option value="dental">اسنان</option>
                        <option value="others">اخرى</option>
                         
                      </select>
                    </div>
                  </div>
                </div>
                


                
                <div class="col-lg-12" hidden>
                  <button id="save_button_one" class="st-btn st-style1 st-color1 st-size-medium" type="submit"  
                    name="submit">حجز</button>
                </div>




                <div class="col-lg-12 mb-4">
                <div class="text-center">
                  <div class="st-height-b10 st-height-lg-b10"></div>
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="save_button_one" name="submit">
                    
                  حجز
                  
                  </button>
                </div>
              </div><!-- .col -->











              </div>
            </form>
          </div>
        </div>
      </div>
    </section>




    
    <script>
function form_sender() {
  //alert("The form was submitted");
  
   
  document.getElementById("save_button_one").disabled = true;

  document.getElementById('save_button_one').innerText = 'يرجى الإنتظار سيتم تحويلك الان';








  var event_phn=document.getElementById('phn_form1').value
 


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


<style>



.form-container {
  background-color: #bcd7df;
  margin-left:5%;
  margin-right:5%;
}


 



 

</style>