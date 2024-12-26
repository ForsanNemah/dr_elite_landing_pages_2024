<!DOCTYPE html>
<html lang="ar" dir="rtl">

<?php include('head.php'); ?>

<body>
  <?php include 'nav.php'; ?>

  <!-- banner section start -->
  <div class="banner">
    <div class="banner_bg_color opacity-75 d-flex align-items-center justify-content-center h-100">
      <div class="process_heading w-100 text-center">
        <h4 class="fs-two p3-color fw-semibold mb-2 text-center">اتصل بنا</h4>
        <span class="p6-color fs-ten d-block text-center">
          بناء مشاريع استجابة، موجهة للموبايل على الويب باستخدام أشهر مكتبة مكونات للواجهة الأمامية.
        </span>
      </div>
    </div>
  </div>

  <div class="brandcumb bg1-color">
    <div class="container">
      <div class="d-flex align-items-center brandcumb">
        <span class="fs-ten p6-color">الرئيسية > <span class="p3-color">اتصل بنا</span></span>
      </div>
    </div>
  </div>

  <!-- banner section end -->

  <!-- Contact section start -->
  <section class="pt-120 pb-120 bg7-color">
    <div class="container">
      <div class="process_heading w-100 text-center" data-aos="fade-down">
        <span class="fs-ten fw-semibold p2-color mb-2 text-center">تواصل معنا</span>
        <h2 class="fs-two fw-semibold p8-color mb-3 mb-lg-6">
          دعنا نبدأ العمل معًا
        </h2>
        <p class="fs-ten p4-color">
          بناء مشاريع استجابة، موجهة للموبايل على الويب باستخدام أشهر مكتبة مكونات للواجهة الأمامية.
        </p>
      </div>
      <div class="row g-3 g-md-6 mt-5 mt-md-10">
        <div class="col-lg-8">
          <form id="contact-form" class="bg14-color py-5 py-md-10 px-4 px-md-8 border cus-border border-six rounded-4">
            <div class="d-sm-flex gap-3 gap-lg-6 mb-4 mb-md-8">
              <div class="w-100">
                <label class="p4-color fs-ten mb-1">الاسم:</label>
                <input
                  type="text"
                  class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                  placeholder="راشيل روث"
                  id="name"
                  required
                />
              </div>
              <div class="w-100 mt-3 mt-sm-0">
                <label class="p4-color fs-ten mb-1">البريد الإلكتروني:</label>
                <input
                  type="email"
                  class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                  placeholder="name@name"
                  id="email"
                  required
                />
              </div>
            </div>
            <div class="mb-4 mb-md-8">
              <label class="p4-color fs-ten mb-1">الموضوع:</label>
              <input
                type="text"
                class="p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                placeholder="اكتب موضوعك"
                id="subject"
                required
              />
            </div>
            <div class="mb-5 mb-md-10">
              <label class="p4-color fs-ten mb-1">الرسالة:</label>
              <textarea
                class="h-135 p4-color border cus-border border-six px-3 px-md-6 py-2 py-md-4 rounded"
                placeholder="راشيل روث"
                id="message"
                required
              ></textarea>
            </div>
            <button class="btn2 p6-color" id="contact-submit-btn">
              <span class="btn-text-one">إرسال الرسالة</span>
              <span class="btn-text-two">إرسال الرسالة</span>
            </button>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="bg1-color px-5 px-lg-10 py-8 py-md-15 rounded-4">
            <div class="mb-5 mb-md-6 mb-xxl-11">
              <h4 class="fs-five p6-color mb-2">عنواننا:</h4>
              <span class="p11-color fs-eleven">
                
        <?php echo $address ?>
            
            
            </span>
            </div>
            <div class="mb-5 mb-md-6 mb-xxl-11">
              <h4 class="fs-five p6-color mb-2">الهاتف:</h4>
              <span class="p11-color fs-eleven d-block mb-2">  <?php echo $phone2 ?></span>
              <span class="p11-color fs-eleven d-block">  <?php echo $phone2 ?></span>
            </div>
            <div class="mb-5 mb-md-6 mb-xxl-11">
              <h4 class="fs-five p6-color mb-2">البريد الإلكتروني:</h4>
              <span class="p11-color fs-eleven d-block mb-2">  <?php echo $email ?></span>
              <span class="p11-color fs-eleven d-block">  <?php echo $email ?></span>
            </div>
            <div class="social_info">
              <h4 class="fs-five p6-color mb-2 mb-md-4">معلوماتنا على وسائل التواصل الاجتماعي:</h4>
              <div class="d-flex flex-wrap gap-3">
                <a href="<?php echo $facebook_url ?>" class="contact_icon d-flex justify-content-center align-items-center">
                  <i class="ph ph-facebook-logo fs-six p6-color"></i>
                </a>
                <a href="<?php echo $x_url ?>" class="contact_icon d-flex justify-content-center align-items-center">
                  <i class="ph ph-x-logo fs-six p6-color"></i>
                </a>
                <a href="<?php echo $linkedin_url ?>" class="contact_icon d-flex justify-content-center align-items-center">
                  <i class="ph ph-linkedin-logo fs-six p6-color"></i>
                </a>
                <a href="<?php echo $instgram_url ?>" class="contact_icon d-flex justify-content-center align-items-center">
                  <i class="ph ph-instagram-logo fs-six p6-color"></i>
                </a>
                <a href="<?php echo $youtube_url ?>" class="contact_icon d-flex justify-content-center align-items-center">
                  <i class="ph ph-youtube-logo fs-six p6-color"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section end -->

  <!-- Footer section start -->
  <?php include 'footer.php' ?>
  <!-- Footer section end -->

</body>
</html>
