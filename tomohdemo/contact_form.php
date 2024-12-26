
<section class="pt-120 pb-120 bg7-color" id="contact_form_id">
      <div class="container">
        <div class="process_heading w-100 text-center" data-aos="fade-down">
          <span class="fs-ten fw-semibold p2-color mb-2 text-center"
            >
            
            لنبقى على تواصل 
            </span
          >
          <h2 class="fs-two fw-semibold p8-color mb-3 mb-lg-6">
          لنبدا العمل معا 
          </h2>
          <p class="fs-ten p4-color">

  





          نحرص على أن نتأكد من أننا ستحقق لك ما ترجوه، وأن تقوم بالتجربة الكاملة والحصول على إجابة لكل استفساراتك بشكل شخصي قبل أن تبدأ معنا. بإمكانك تجربة الخدمة وأنظمتها بشكل كامل من خلال مشروع تجريبي مصغر (PoC) أو حساب مجاني يجهز لك لتجري عليه عمليات تجريبية أو حتى حجز أحد استشاريي الحلول المحاسبية المتوفرين لدينا للإجابة على ما تشاء، وذلك بعد إدخال بياناتك أدناه.

















          </p>
        </div>
        <div class="row g-3 g-md-6 mt-5 mt-md-10">
          <div class="col-lg-8">
            <form
              method="post"
              action="post_to_google_sheet.php"
              class="bg14-color py-5 py-md-10 px-4 px-md-8 border cus-border border-six rounded-4"
            >
              <div class="d-sm-flex gap-3 gap-lg-6 mb-4 mb-md-8">
                <div class="w-100">
                  <label class="p4-color fs-ten mb-1">الاسم:</label>
                  <input
                    type="text"
                    name="name"
                    class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                    placeholder=" ضع اسمك هنا   "
                    id="name"
                    required
                  />
                </div>
                <div class="w-100 mt-3 mt-sm-0">
                  <label class="p4-color fs-ten mb-1">رقم الجوال:</label>
                  <input
                    type="number"
                      name="phone"
                    class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                    placeholder=" ضع رقم جوالك هنا "
                    id="email"
                    required
                  />
                </div>
              </div>
              <div class="mb-4 mb-md-8">
                <label class="p4-color fs-ten mb-1">الموضوع:</label>
                <input
                  type="text"
                    name="subject"
                  class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                  placeholder=" اكتب هنا الخدمة التي تريدها  "
                  id="subject"
                  required
                />
              </div>
              <div class="mb-5 mb-md-10">
                <label class="p4-color fs-ten mb-1">الر سالة :</label>
                <textarea
                 placeholder="  تفاصيل اكثر    "
                  class="h-135 p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                  placeholder=""
                    name="msg"
                  id="message"
                  required
                ></textarea>
              </div>
              <button class="btn2 p6-color"  >
                <span class="btn-text-one">ارسال الرسالة</span>
                <span class="btn-text-two">تاكيد الارسال </span>
              </button>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="bg1-color px-5 px-lg-10 py-8 py-md-15 rounded-4">
              <div class="mb-5 mb-md-6 mb-xxl-11">
                <h4 class="fs-five p6-color mb-2">عنواننا </h4>
                <span class="p11-color fs-eleven"
                  >
                  
                  
                  <?php echo $address; ?>
                  
                  
                  </span
                >
              </div>
              <div class="mb-5 mb-md-6 mb-xxl-11">
                <h4 class="fs-five p6-color mb-2">جوال:</h4>
                <span class="p11-color fs-eleven d-block mb-2"
                  >
                  
                  
                  <?php echo $phone2; ?>
                  
                  
                  
                  </span
                >
                <span class="p11-color fs-eleven d-block"
                  >
                  
                  
                  <?php echo $phone2; ?>
                  
                  
                  
                  
                  </span
                >
              </div>
              <div class="mb-5 mb-md-6 mb-xxl-11">
                <h4 class="fs-five p6-color mb-2">ايميل:</h4>
                <span class="p11-color fs-eleven d-block mb-2"
                  >
                   
                  <?php echo $email; ?>
                  </span
                >
                <!-- <span class="p11-color fs-eleven d-block"
                  >info@example.com</span
                > -->
              </div>


              <div class="social_info" hidden>
                <h4 class="fs-five p6-color mb-2 mb-md-4">   مواقع التواصل الاجتماعي </h4>
                <div class="d-flex flex-wrap gap-3">
                  <a
                    href="javascriopt:void(0)"
                    class="contact_icon d-flex justify-content-center align-items-center"
                  >
                    <i class="ph ph-facebook-logo fs-six p6-color"></i>
                  </a>
                  <a
                    href="javascriopt:void(0)"
                    class="contact_icon d-flex justify-content-center align-items-center"
                  >
                    <i class="ph ph-x-logo fs-six p6-color"></i>
                  </a>
                  <a
                    href="javascriopt:void(0)"
                    class="contact_icon d-flex justify-content-center align-items-center"
                  >
                    <i class="ph ph-linkedin-logo fs-six p6-color"></i>
                  </a>
                  <a
                    href="javascriopt:void(0)"
                    class="contact_icon d-flex justify-content-center align-items-center"
                  >
                    <i class="ph ph-instagram-logo fs-six p6-color"></i>
                  </a>
                  <a
                    href="javascriopt:void(0)"
                    class="contact_icon d-flex justify-content-center align-items-center"
                  >
                    <i class="ph ph-youtube-logo fs-six p6-color"></i>
                  </a>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>