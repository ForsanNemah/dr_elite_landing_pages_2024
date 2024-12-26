
<header class="header-section header-menu w-100 pt-1 pt-lg-0 pb-3 pb-lg-0">
      <div class="navbar_mainhead header-fixed w-100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <nav
                class="navbar navbar-expand-lg position-relative d-flex align-items-center"
              >
                <div>
                  <a
                    href="index.php"
                    class="navbar-brand d-none d-sm-flex align-items-center gap-2"
                  >
                    <img
                      src="./assets/images/logo.png"
                      class="logo"
                      alt="logo"
                    />
                  </a>
                  <a
                    href="index.php"
                    class="navbar-brand d-sm-none d-flex align-items-center gap-2"
                  >
                    <img
                      src="./icons/fav.png"
                      class="logo"
                      alt="logo"
                    />
                  </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-content">
                  <ul
                    class="navbar-nav d-flex align-items-lg-center gap-5 gap-lg-1 gap-xl-4 gap-xxl-5 py-2 py-lg-0 ms-2 ms-xl-10 ms-xxl-20 ps-0 ps-xxl-10 align-self-center"
                  >
                    <li class="dropdown">
                      <a href="index.php" class="fs-ten">الرئيسية</a>
                    </li>

                    <li class="dropdown">
                      <a href="about.php" class="fs-ten">من نحن </a>
                    </li>


                    <li class="dropdown show-dropdown">
                      <a href="services.php" class="fs-ten">الخدمات</a>
                    </li>

                  
                    <li class="dropdown">
                      <a href="programs.php" class="fs-ten"> برامجنا</a>
                    </li>

                    <li class="dropdown show-dropdown">
                      <a href="testimonials.php" class="fs-ten"
                        >اراء العملاء </a
                      >
                    </li>


                    <li hidden class="dropdown show-dropdown">
                      <a href="team.html" class="fs-ten">Team</a>
                    </li>




                    <li hidden class="dropdown show-dropdown dropdown_btn">
                      <button
                        type="button"
                        aria-label="Navbar Dropdown Button"
                        class="dropdown-toggle dropdown-nav d-flex gap-1 align-items-center fs-ten"
                      >
                        Menu <i class="ph-bold ph-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu drop_menu">
                        <li>
                          <a class="dropdown-item fs-ten" href="about.html"
                            >About</a
                          >
                        </li>
                        <li>
                          <a
                            class="dropdown-item fs-ten"
                            href="blog_details.html"
                            >Blog Details</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="price.html"
                            >Pricing</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="faqs.html"
                            >FAQs</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="portfolio.html"
                            >Portfolio</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="contact.html"
                            >Contact</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="terms.html"
                            >Terms Conditions</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item fs-ten" href="privacy.html"
                            >Privacy Policy</a
                          >
                        </li>
                      </ul>
                    </li>



                  

                    <li class="dropdown show-dropdown" hidden>
                      <a href="blog.html" class="fs-ten">المدونة</a>
                    </li>


                  </ul>
                </div>
                <div>
                  <div
                    class="right-area custom-pos position-relative d-flex gap-0 gap-xl-5 align-items-center"
                  >
                    <button
                      id="toggle"
                      class="dark_btn d-flex justify-content-center align-items-center fs-three p6-color mood_toggle"
                    >
                      <i class="ph-fill ph-moon fs-five" id="mood_icon"></i>
                    </button>
                    <a
                      href="https://api.whatsapp.com/send?phone=<?php echo $phone2 ?>&text=<?php echo urldecode('     معلومات أكثر عن اسعار خدماتكم') ?>"
                      class="btn p6-color d-none d-xl-block"
                    >
                      <span class="btn-text-one">      عرض سعر </span>
                      <span class="btn-text-two">   الحصول على عرض سعر</span>
                    </a>
                  </div>
                  <button
                    class="navbar-toggler mt-1"
                    type="button"
                    data-bs-toggle="collapse"
                    aria-label="Navbar Toggler"
                    data-bs-target="#navbar-content"
                    aria-expanded="true"
                    id="nav-icon3"
                  >
                    <span></span><span></span><span></span><span></span>
                  </button>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>