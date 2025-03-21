<style>
  body {
    padding-top: 5px; /* Add padding to the top of the body to account for the fixed navbar */
  }
  .navbar-nav .nav-link {
    color: #333; /* Set the text color of the navigation items to dark gray */
  }
  .navbar {
    background-color: #fff; /* Set the background color of the navigation bar to white */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
  }
  .navbar-brand img {
    height: 40px; /* Adjust the height of the logo */
    margin-right: 10px; /* Add spacing between the logo and the text */
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" dir="rtl">
  <div class="container">
    <a class="navbar-brand ms-auto" href="#">
      <img src="footer_logo/Tachafi 14-0١.png" alt="Logo"> 
      <?php echo $website_name ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php" onclick="toggleNavbar()">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about2" onclick="toggleNavbar()">من نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#why_us" onclick="toggleNavbar()">لماذا نحن</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#therapist_id" onclick="toggleNavbar()">المعالجين</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#myform" onclick="toggleNavbar()">تواصل معنا</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  function toggleNavbar() {
    var navbarCollapse = document.getElementById("navbarNav");
    navbarCollapse.classList.toggle("show");
  }
</script>
