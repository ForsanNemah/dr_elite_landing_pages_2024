<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saudi Marketing Agency</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.11.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Marketing Agency</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Welcome to our Marketing Agency</h1>
      <p class="lead">We offer a wide range of services to help your business succeed.</p>
    </div>
  </header>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Managing Social Media Accounts</h5>
              <p class="card-text">We provide professional management of social media accounts to enhance your online presence.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Launching Sponsored Campaigns</h5>
              <p class="card-text">We create and manage targeted sponsored campaigns to reach your desired audience.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Marketing Program via Snapchat</h5>
              <p class="card-text">We utilize Snapchat's advertising platform to promote your business and engage with your audience.</p>
            </div>
          </div>
        </div>
        <!-- Repeat the above card structure for other services -->
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Saudi Marketing Agency. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.11.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>