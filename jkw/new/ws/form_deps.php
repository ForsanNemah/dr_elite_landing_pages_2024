
<section id="appointment" class="st-shape-wrap st-gray-bg">
      <div class="st-shape4">
        <img src="assets/img/shape/section_shape.png" alt="shape1">
      </div>
      <div class="st-shape6">
        <img src="assets/img/shape/contact-shape3.svg" alt="shape3">
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">حجز موعد</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <div class="st-section-heading-subtitle">
            
      سجل بياناتك وسيتم التواصل معك في اسرع وقت
          
          
          </div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <form method="POST" action="assets/php/appointment.php" class="st-appointment-form" id="appointment-form">
              <div id="st-alert1"></div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>الاسم</label>
                    <input type="text" id="uname" name="uname" placeholder=" ضع اسمك هنا " required>
                  </div>
                </div>
                


                <div class="col-lg-6">
                  <div class="st-form-field st-style1">
                    <label>رقم الجوال</label>
                    <input type="text" id="unumber" name="unumber" placeholder="5xxxxxxxx" required>
                  </div>
                </div>
                


                <div class="col-lg-12">
                  <div class="st-form-field st-style1">
                    <label>القسم  </label>
                    <div class="st-custom-select-wrap">
                      <select name="udepartment" id="udepartment" class="st_select1"
                        data-placeholder="اختر القسم">
                        <option></option>
                        <option value="derma">الجلدية</option>
                        <option value="tagmeel">تجميل</option>
                        <option value="dental">اسنان</option>
                        <option value="others">اخرى</option>
                         
                      </select>
                    </div>
                  </div>
                </div>
                


                
                <div class="col-lg-12">
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="appointment-submit"
                    name="submit">حجز</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>