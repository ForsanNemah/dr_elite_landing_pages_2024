<!DOCTYPE html>
<html lang="en" dir="rtl">

<?php
$page_title = "الخدمات | طموح لتقنية المعلومات";
?>

<?php include('head.php'); ?>


<body>
  <?php include 'nav.php'; ?>
  <!-- banner section start -->
  <div class="banner">
    <div class="banner_bg_color d-flex align-items-center justify-content-center h-100">
      <div class="process_heading w-100 text-center">
        <h4 class="fs-two p3-color fw-semibold mb-2 text-center">خدماتنا</h4>
        <span class="p6-color fs-ten d-block text-center">
          نقدم مجموعة من الخدمات الرائدة في مجال إدارة تخطيط المؤسسات وكل ما يخص التسويق الالكتروني.
        </span>
      </div>
    </div>
  </div>

  <div class="brandcumb bg1-color">
    <div class="container">
      <div class="d-flex align-items-center brandcumb">
        <span class="fs-ten p6-color">الرئيسية > <span class="p3-color">خدماتنا</span></span>
      </div>
    </div>
  </div>
  <!-- banner section end -->

  <!-- service section start -->
  <section class="container pt-120 pb-120">
    <div class="row g-2 g-lg-5 mt-7 mt-lg-15">

      <!-- ERP -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./icons/erp.png" alt="apps" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">أنظمة ERP</h4>
          <p class="p4-color fs-ten">
            نقدم أنظمة ERP متكاملة ومرنة لتحسين إدارة العمليات وزيادة كفاءة الشركات في مختلف القطاعات.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('أنظمة ERP') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Mobile App Development -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/apps.png" alt="apps" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">تطوير تطبيقات الموبايل</h4>
          <p class="p4-color fs-ten">
            نقوم بتصميم وتطوير تطبيقات مخصصة لأنظمة iOS و Android مع ميزات متقدمة تعزز تجربة المستخدم وتدعم أهدافكم التجارية.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('تطوير تطبيقات الموبايل') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- IT Services -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./icons/it.png" alt="it" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">خدمات تكنولوجيا المعلومات</h4>
          <p class="p4-color fs-ten">
            نقدم خدمات كاملة لإدارة الشركات في مجال تكنولوجيا المعلومات.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('خدمات تكنولوجيا المعلومات') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Low Current -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./icons/lc.png" alt="lowcurrent" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">التيار الخفيف</h4>
          <p class="p4-color fs-ten">
            نقدم تركيب وتوريد أنظمة التيار الخفيف في مجالات مختلفة لدعم احتياجاتكم.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('التيار الخفيف') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Web Development -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/web.png" alt="web" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">تطوير المواقع الإلكترونية</h4>
          <p class="p4-color fs-ten">
            تطوير مواقع ويب احترافية بمواصفات حديثة تدعم جميع الأجهزة مع تحسين الأداء وسرعة التصفح.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('تطوير المواقع الإلكترونية') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Digital Marketing -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/digital.png" alt="marketing" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">التسويق الرقمي</h4>
          <p class="p4-color fs-ten">
            تقديم حلول تسويق إلكتروني متكاملة لزيادة وصول علامتكم التجارية وتعزيز وجودكم على الإنترنت.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('التسويق الرقمي') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- SEO -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/seo.png" alt="seo" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">تحسين محركات البحث (SEO)</h4>
          <p class="p4-color fs-ten">
            تحسين ظهور موقعكم على نتائج البحث لزيادة حركة المرور والوصول إلى جمهوركم المستهدف.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('تحسين محركات البحث') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Web Hosting -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/hosting.png" alt="hosting" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">استضافة المواقع</h4>
          <p class="p4-color fs-ten">
            نقدم خدمات استضافة عالية الجودة مع دعم فني على مدار الساعة لضمان استقرار موقعك.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('استضافة المواقع') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

      <!-- Data Security -->
      <div class="col-12 col-sm-6 col-xl-4">
        <div class="text-center px-10 py-8 hover:bg6-color service_card_hover">
          <img src="./assets/images/security.png" alt="security" width="80" height="80" />
          <h4 class="fs-five fw-semibold p8-color mt-8 mb-4">أمن البيانات</h4>
          <p class="p4-color fs-ten">
            توفير حلول أمان متقدمة لحماية بياناتكم الرقمية وضمان خصوصيتها من أي تهديدات.
          </p>
          <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('أمن البيانات') ?>">
            <button class="btn btn-primary mt-4">طلب الخدمة</button>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- service section end -->

  <!-- Footer section start -->
  <?php include 'footer.php' ?>
  <!-- Footer section end -->

</body>
</html>
