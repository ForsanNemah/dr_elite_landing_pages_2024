<div id="preloader">
    <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
      <defs>
        <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100" gradientUnits="userSpaceOnUse">
          <stop offset=".68" stop-color="#21df51" />
          <stop offset=".72" stop-color="#3add63" />
          <stop offset=".77" stop-color="#4fdd73" />
          <stop offset=".82" stop-color="#66db83" />
          <stop offset=".88" stop-color="#7cd893" />
          <stop offset=".93" stop-color="#95d8a6" />
          <stop offset=".99" stop-color="#bde6c7" />
          <stop offset="1" stop-color="#e3f1e7" />
        </radialGradient>
      </defs>
      <circle id="fillDot" cx="400" cy="300" fill="#21df51" r="100" />
      <circle id="gradDot" cx="400" cy="300" fill="url(#mainGrad)" r="100" />
    </svg>
  </div>
  <!-- end preLoader -->

  <!-- start scroll to top button -->
  <div id="progress">
    <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
  </div>
  <!-- end scroll to top button -->

  <!-- ======= start Header ======= -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand " href="#"><img src="images/logo/logo.png" class="logo" alt="LOGO"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list" id="menu"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="flex-row-reverse navbar-nav d-flex ms-auto" id="navbar">
            <li class="nav-item ">
              <a class="nav-link active " aria-current="page" href="index.html">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">خدماتنا</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="py-2 dropdown-item" href="404.html">404 page</a></li>
                <li><a class="py-2 dropdown-item" href="blog.html">blog</a></li>
                <li><a class="py-2 dropdown-item" href="blog-single.html">single blog page</a></li>
                <li><a class="py-2 dropdown-item" href="about.html">about</a></li>
                <li><a class="py-2 dropdown-item" href="services.html">services</a></li>
                <li><a class="py-2 dropdown-item" href="service-single.html">service single</a></li>
                <li><a class="py-2 dropdown-item" href="portfolio.html">portfolio</a></li>
                <li><a class="py-2 dropdown-item" href="portfolio-single.html">portfolio single</a></li>
                <li><a class="py-2 dropdown-item" href="privacy-policy.html">privacy policy</a></li>
                <li><a class="py-2 dropdown-item" href="terms-of-use.html">terms of use</a></li>
                <li><a class="py-2 dropdown-item" href="contact.html">contact</a></li>
                <li><a class="py-2 dropdown-item" href="login.html">login page</a></li>
                <li><a class="py-2 dropdown-item" href="register.html">register</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">المعرض</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">مقالات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">اتصل بنا</a>
            </li>
          </ul>
          <div class="d-flex ms-auto">
            <a class="btn" href="register.html">انضم الان</a>
            <button id="mode-toggle" class="btn-light-mode switch-button"><i id="mode-icon"
                class="bi bi-moon-fill"></i></button>
          </div>
        </div>
      </div>
    </nav>
  </header>