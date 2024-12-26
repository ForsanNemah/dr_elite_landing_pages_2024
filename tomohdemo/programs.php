<!DOCTYPE html>
<html lang="en" dir="rtl">
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
    <div class="d-flex flex-wrap gap-5 justify-content-between align-items-end" data-aos="fade-down" data-aos-duration="800">
      <div class="service_heading">
        <span class="fs-ten fw-semibold p2-color mb-2">خدماتنا</span>
        <h2 class="fs-two fw-semibold p8-color mb-6">الخدمات التي نقدمها</h2>
        <p class="fs-ten p4-color">
          نقدم مجموعة من الخدمات المتكاملة لدعم تطور أعمالكم في مختلف مجالات التكنولوجيا والتسويق الرقمي.
        </p>
      </div>
    </div>
    <div class="row g-2 g-lg-5 mt-7 mt-lg-15">
      <!-- خدمات -->
      <?php 
        $services = [
          ["img" => "erp.jpg", "title" => "نظام الحسابات العامة", "desc" => "إدارة مالية دقيقة وشاملة تشمل العمليات المحاسبية وإعداد التقارير المالية بسهولة."],
          ["img" => "erp.jpg", "title" => "نظام الأصول الثابتة", "desc" => "تتبع وإدارة الأصول الثابتة مع تسجيل الإهلاك والصيانة."],
          ["img" => "erp.jpg", "title" => "نظام المخازن والفواتير", "desc" => "إدارة المخزون والفواتير بكفاءة عالية لتلبية احتياجات العملاء وتحقيق رضاهم."],
          ["img" => "erp.jpg", "title" => "نظام نقاط البيع", "desc" => "حلول مميزة لإدارة عمليات البيع بالتجزئة بسلاسة وسرعة."],
          ["img" => "erp.jpg", "title" => "إدارة الموارد البشرية", "desc" => "نظام شامل لإدارة شؤون الموظفين والرواتب والإجازات."],
          ["img" => "erp.jpg", "title" => "نظام إدارة مركز خدمة السيارات", "desc" => "إدارة شاملة للخدمات المقدمة في مراكز صيانة السيارات."],
          ["img" => "erp.jpg", "title" => "نظام معارض السيارات", "desc" => "حلول متكاملة لإدارة عمليات البيع والشراء في معارض السيارات."],
          ["img" => "erp.jpg", "title" => "نظام التسويق الإلكتروني", "desc" => "أدوات متقدمة لتحليل البيانات وتخطيط الحملات التسويقية الرقمية بفعالية."]
        ];
        foreach ($services as $service) { ?>
          <div class="col-12 col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="700">
            <div class="text-center px-10 py-8 hover:bg6-color service_card_hover d-flex flex-column justify-content-between" style="height: 100%;">
              <div>
                <img src="progects_images/<?php echo $service['img']; ?>" alt="<?php echo $service['title']; ?>" class="mb-4" />
                <h4 class="fs-five fw-semibold p8-color mt-8 mb-4"><?php echo $service['title']; ?></h4>
                <p class="p4-color fs-ten"><?php echo $service['desc']; ?></p>
              </div>
              <div class="mt-auto">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode($service['title']); ?>">
                  <button class="btn btn-primary mt-4 w-100">طلب البرنامج</button>
                </a>
              </div>
            </div>
          </div>
      <?php } ?>
    </div>
  </section>
  <!-- service section end -->

  <?php include 'footer.php'; ?>
 
</body>

</html>
