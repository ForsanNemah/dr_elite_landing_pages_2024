<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top rtl navbar-with-margin">
  <a class="navbar-brand" href="#">
    <img src="logo.png" alt="Logo" width="50px">
    مجمع عيادات الدكتور جميل خطاب
  </a>
  <button onclick="close_nav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">الرئيسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-us">من نحن</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">خدماتنا</a>
      </li>
<!--
      <li class="nav-item">
        <a class="nav-link" href="#gallery">معرض الصور</a>
      </li>

-->
      <li class="nav-item">
        <a class="nav-link" href="#after_and_before">حالات قبل وبعد</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#parteners">شركات التأمين</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">تواصل معنا</a>
      </li>
    </ul>
  </div>
</nav>

<script>
  $(document).ready(function () {
    $('.navbar-nav li a').on('click', function () {
      $('.navbar-collapse').collapse('hide');
    });
  });

  function close_nav() {
    if ($("#navbarNav").hasClass("show")) {
      $('.navbar-collapse').collapse('hide');
    }
  }
</script>

<style>
  .navbar-with-margin {
    margin-bottom: 100px;
  }
</style>