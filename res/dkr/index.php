<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>مطعم دلع كرشك</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <?php


include "info.php";

include "wa_api.php";

?>


<link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

                
</head>




<body dir="rtl">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex justify-content-center justify-content-md-between">


 
      <div class=" row contact-info d-flex align-items-center mt-1">

       
        <i class="bi bi-phone d-flex align-items-center "><span>
          
        
        
       
      
      
        <a href="tel: <?php echo $phone;?>"> <?php echo $phone;?></a>
      
      
      </span></i>


   

        <i class="bi bi-clock d-flex align-items-center ms-4"><span> 

 



        </span>
      
        على مدار الاسبوع  من 9 صباحا الى 12  صباحا      
      
      
      </i>
      </div>

































      


      <!--
      <div class="languages d-none d-md-flex align-items-center" >
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    -->

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center mt-1">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0 mr-auto"><a href="index.html">     </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0 ml-auto">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="#menu">المنيو </a></li>

          <li><a class="nav-link scrollto" href="#gallery">معرض الصور</a></li>

          <!---
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        -->
          <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle mr-auto"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">حجز طاولة</a>

    </div>
  </header>
  
  
  
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1  >   مطعم 
             <span>دلع كرشك</span></h1>
          
          <h2 class="mt-2">أكل مصري مصري</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">المنيو</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">حجز طاولة</a>
          </div>
        </div>

 

          <?php
include "hero_video.php";

?>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           


            <div class="section-title">
          
          <p contenteditable="true">  مطعم دلع كرشك </p>
        </div>


            <p contenteditable="true" class=" ">
             


            هو وجهة فريدة في قلب مدينة الدمام لعشاق المأكولات المصرية التقليدية يتميز المطعم بأجوائه الرائعة والمريحة حيث يتم استقبال الضيوف بحفاوة وضيافة تعكس أصالة الثقافة المصرية يقدم مطعم دلع كرشك تشكيلة واسعة من الأطباق الشهية المستوحاة من المطبخ المصري تتضمن قائمة الطعام مجموعة متنوعة من الوجبات اللذيذة كما يمكنكم الاستمتاع بالأطباق الرئيسية المميزة مثل الكشري والملوخية والفتة، والتي تعد رموزًا للمأكولات المصرية اللذيذة نحرص في دلع كرشك على استخدام أفضل المكونات الطازجة والمحلية لإعداد أطباقها، مما يمنحها نكهة غنية وأصالة لا تقاوم.
 يتمتع طهاتنا بمهارات عالية وخبرة في تحضير الأطباق بأسلوب متقن ومبدع، لنضمن  لكم تجربة طعام لا تُنسى




            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>لماذا نحن </h2>
          <p contenteditable="true">لماذا تختار مطعمنا </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span >

              تنوع الاطباق 

              </span>
              <h4>

         
              </h4>
              <p contenteditable="true">
                
              نفتخر بتقديم تشكيلة واسعة من الأطباق المصرية المميزة، بدءًا من الاطباق  الممتعة مثل الفلافل والحمص، وصولًا إلى الأطباق الرئيسية مثل الكشري والملوخية والمشويات بانواعها، بالإضافة إلى الحلويات الشهية مثل البسبوسة والكنافة وام علي.
              
              
              </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>


              جودة المكونات

              </span>
              <h4>

       

              </h4>
              <p contenteditable="true">
                
              نحرص على استخدام أفضل المكونات الطازجة والتوابل الأصلية لإعداد الطعام بطريقة تحافظ على الطعم الأصيل والجودة العالية.
              
              
              
              </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>

              خدمة عملاء ممتازة



              </span>
              <h4> 
    

              </h4>
              <p contenteditable="true">
                
                 
              
              يعمل فريقنا المحترف على تقديم خدمة عملاء ممتازة وتجربة تناول طعام استثنائية، حيث نسعى دائمًا لتلبية احتياجاتكم وتوفير أعلى مستويات الرضا.
              
              
              
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>المنيو</h2>
          <p contenteditable="true">تصفح قائمة طعامنا  اللذيذة</p>


      


  <div class="container">
    <img src="menu/1.jpg" class="img-fluid" alt="Responsive Image">
    <img src="menu/2.jpg" class="img-fluid mt-4" alt="Responsive Image">
  </div>
        
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100" hidden>
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200" hidden>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread Barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials" hidden>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p contenteditable="true">Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p contenteditable="true" class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p contenteditable="true">Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p contenteditable="true" class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p contenteditable="true">Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p contenteditable="true" class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p contenteditable="true">Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p contenteditable="true" class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p contenteditable="true">Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p contenteditable="true" class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p contenteditable="true">Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events" hidden>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p contenteditable="true">Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p contenteditable="true"><span>$189</span></p>
                  </div>
                  <p contenteditable="true" class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p contenteditable="true">
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p contenteditable="true"><span>$290</span></p>
                  </div>
                  <p contenteditable="true" class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p contenteditable="true">
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p contenteditable="true"><span>$99</span></p>
                  </div>
                  <p contenteditable="true" class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul>
                  <p contenteditable="true">
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>الحجز</h2>
          <p contenteditable="true">

          اكتشفوا عبق الثقافة المصرية
          
          <br>
          
        من خلال مذاقاتنا الفريدة في مطعم دلع كرشك.
        <br>
        
        احجزوا زيارتكم اليوم وعيشوا تجربة لا تُنسى معنا


          </p>
        </div>

        <form action="post_to_google_sheet.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">


            <div class="col-lg-6 col-md-6 form-group">
              <input type="text" name="name" class="form-control"  placeholder="اسمك" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            

            <div class="col-lg-6 col-md-6 form-group">
              <input type="number" name="phone" class="form-control"  placeholder="رقم جوالك" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
          



            <div class="col-lg-4 col-md-6 form-group" hidden>
            <input type="text" name="date_and_time" id="datetime" placeholder="اختر تاريخ الحجز" required />
              <div class="validate"></div>
            </div>
         
     

            <div class="col-lg-12 col-md-12 form-group" hidden>
              <input type="number" name="no_of_p" class="form-control"   placeholder="  عدد الافراد  " data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>


          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="msg" rows="5" placeholder="تفاصيل اخرى"  ></textarea>
            <div class="validate"></div>
          </div>

          <div class="mb-3" hidden>

            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          
          <div class="text-center"><button type="submit">حجز</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>اراء العملاء</h2>
          <p contenteditable="true">ماذا قال عملاؤنا عنا </p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p contenteditable="true">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  الاكل رائع والخدمة ممتازة والاسعار فى المتناول ، وشكر خاص للشيف حمدى مرمر على الفطير وطعمه الجميل



                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/male.webp" class="testimonial-img" alt="">
                <h3>احمد عطية</h3>
             
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p contenteditable="true">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>


                  ماشاءالله عليهم
                  فعلا يستحق الزيارة
                  ⭐️⭐️⭐️⭐️⭐️





                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/female.png" class="testimonial-img" alt="">
                <h3>سمية الزهراني</h3>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p contenteditable="true">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>


                  ماشاء الله مطعم ممتاز جدا نضافه وخدمه بصراحه تغيير ف كل شئ ف المطعم حاجه محترمه والله






                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/male.webp" class="testimonial-img" alt="">
                <h3>محمد القحطاني</h3>
           
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p contenteditable="true">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  تقيمي للمشويات ممتازه سلطه الطحينة والباذنجان المخلل ممتازين بيتزا وفطيرة دلع كرشك ممتازين الممبار ممتاز
                  ملاحظتي الوحيده اني صاله العوائل صغيره جدا والأسر قريبه جدا من بعضها وأعتقد حل الموضوع ده  ان المطعم يوفر  بارتيشنات وايضا  يمكن استخدامها في صاله الأفراد وقفل الطاوله بالبرتيشن المتحرك





                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/male.webp" class="testimonial-img" alt="">
                <h3> محمد بسيوني </h3>
            
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p contenteditable="true">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>


                  مطعم مصري اصيل باشراف الاخ احمد الاكل عنده علئ اصوله مشاوي وسلطات وشروبه ومشلتت ومحاشي وكشري المطعم متنوع جدا والاكل خورافي من الاخر وهو علئ  استعداد تام لشهر رمضان ومتوفر قسم عائلات ببارتشي قسم خاص للعوائل والعزاب روحو للمطعم وانتم مغمضين علئ ضمانتي  وقولوا له من طرف ام وليد المزيد



                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/female.png" class="testimonial-img" alt="">
                <h3> نعمات  حسام</h3>
               
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>معرض الصور </h2>
          <p contenteditable="true">بعض الصور من مطعمنا </p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">








        <?php
$folderPath = 'assets/img/res-2024'; // Replace with the actual folder path

// Get the list of files and directories in the folder
$files = scandir($folderPath);

// Iterate through the files
foreach ($files as $file) {
    // Skip the current and parent directory entries
    if ($file === '.' || $file === '..') {
        continue;
    }
    
    // Output the file name
    //echo $file . "\n";

echo '



<div class="col-lg-3 col-md-4">
<div class="gallery-item">
  <a href="assets/img/res-2024/'.$file.'" class="gallery-lightbox" data-gall="gallery-item">
    <img src="assets/img/res-2024/'.$file.'" alt="" class="img-fluid">
  </a>
</div>
</div>






';

    
}
?>



















<!--


          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>



-->

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs" hidden>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p contenteditable="true">Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p contenteditable="true">تواصل معنا </p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.5728580815266!2d50.08620218496502!3d26.43725738333465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fc663c306c9b%3A0x6b1cf3666b86cc8b!2z2K_ZhNi5INmD2LHYtNmD!5e0!3m2!1sar!2ssa!4v1712413382794!5m2!1sar!2ssa" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-12">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>العنوان</h4>
                <p contenteditable="true">
                 
                  <a href="https://maps.app.goo.gl/evtnkb9b7TNhZwDNA">
                
                
                  النخيل الثامن والعشرون، النخيل، الدمام 32244
                
                </a>

                </p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>ساعات العمل</h4>
                <p contenteditable="true">
               
                  
                <a href=""> 
              
              
                السبت-الجمعة من 9 صباحا الى 12 بعد منتصف الليل 
              
              
              </a>
                  <br>
                
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>الايميل</h4>
                <p contenteditable="true">
                  
                


               
              
              
                <a href="mailto:<?php echo $email;?> "> <?php echo $email;?> </a>
              
              
              
              
              </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>موبايل</h4>
                <p contenteditable="true">
                
                
                 <a href="tel: <?php echo $phone;?>"> <?php echo $phone;?></a>
                
                
                
                
                </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" hidden>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>دلع كرشك</h3>
              <p contenteditable="true">


             
                <strong >جوال :</strong>   <?php echo $phone?><br>
                
              
               

                <strong>الايميل :</strong>   <?php echo $email?><br> 
            
                <strong >العنوان :</strong>   <?php echo $address?><br>



              </p>




              <div class="social-links mt-3">
             
                <a href="https://www.facebook.com/dallakershaik" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/dalaakershaik/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://twitter.com/dkr_ksa" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.tiktok.com/@dkr_ksa" class="tiktok"><i class="bx bxl-tiktok"></i></a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>روابط تهمك</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">الرئيسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">من نحن</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" hidden>
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" hidden>
            <h4>Our Newsletter</h4>
            <p contenteditable="true">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; جميع الحقوق محفوظة  <strong><span>مطعم دلع كرشك</span></strong> 
      </div>
      <div class="credits" hidden>
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files 
  <script src="assets/vendor/php-email-form/validate.js"></script>


-->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>

</html>



<style>


body{
   
  font-family: 'Tajawal';font-size: 25px;
  
}


#hero .play-btn {
    width: 94px;
    height: 94px;
    background: radial-gradient(#ff0000 50%, rgba(205, 164, 94, 0.4) 52%);
    border-radius: 50%;
    display: block;
    position: relative;
    overflow: hidden;
}



#hero h1 span {
    color: #ff4343;
}
 


 



.section-title p {
    margin-top: 15px;
    
    font-size: 36px;
    font-weight: 700;
    font-family: "Playfair Display", serif;
    color: #ff2929;
    font-family: 'Tajawal';font-size: 25px;
}


.why-us .box span {
    display: block;
    font-size: 28px;
    font-weight: 700;
    color: #ff0000;
}









.book-a-table .php-email-form button[type=submit] {
    background: #fb0202;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
}




.section-title h2 {
    font-size: 20px;
    font-weight: 500;
    padding: 0;
    line-height: 1px;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #ffffff;
    font-family: "Poppins", sans-serif;
    font-family: 'Tajawal';font-size: 25px;
}






#menu_frame {
    width: 100%;
    height: 1200px;
  }

  @media (max-width: 768px) {
    #menu_frame {
      width: 100%;
    height: 700px;
    }
  }




  section {
    padding: 20px 0;
    overflow: hidden;
}


#hero h1 {
  font-family: 'Tajawal';
}


#hero h2 {
  font-family: 'Tajawal';
}


.contact .info h4 {
    padding: 0 0 0 60px;
    font-size: 25px;
    font-weight: 500;
    margin-bottom: 5px;
    font-family: 'Tajawal';
}




#footer .footer-top .footer-info h3 {
    font-size: 30px;
    font-weight: 400;
    margin: 0 0 20px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    text-transform: uppercase;
    font-family: 'Tajawal';
    color:#fb0202;
}


#footer .footer-top h4 {
    font-size: 25px;
    font-weight: 400;
    color: #fff;
    position: relative;
    padding-bottom: 12px;
    font-family: 'Tajawal';
    color:#fb0202;
}



#footer .footer-top .footer-info p {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Playfair Display", serif;
    color: #fff;
    font-family: 'Tajawal';
}




#footer .footer-top .footer-links ul a {
  font-size: 18px;
    color: #fff;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
}





.contact .info i {
    font-size: 20px;
    float: left;
    width: 44px;
    height: 44px;
    background: #ff0000;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}







#topbar .contact-info i {
    font-style: normal;
    color: #ffffff;
}



a {
    color: #ff7f7f;
    text-decoration: none;
}

</style>



<script>
flatpickr("#datetime", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

</script>