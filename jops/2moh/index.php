<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5.0.0 Buttons</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .animated {
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-custom {
      min-width: 200px;
    }
  </style>
</head>
<body>
  <div class="container d-flex flex-column align-items-center justify-content-center animated" style="height: 40vh;">
    <h1 class="mb-4">انضم لفريقنا المميز</h1>

 


    <div class="gap-3 d-flex flex-column">
      <a href="https://forms.gle/qJutNNYp3Epd5YUu9">
        <button type="button" class="btn btn-primary rounded-pill btn-custom">
          مختص تسويق إلكتروني
        </button>
      </a>
      <a href="https://forms.gle/X5kLRdmAeeGyqAc1A">
        <button type="button" class="btn btn-primary rounded-pill btn-custom">
          مصمم جرافيك
        </button>
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add the 'animated' class to the container element when the page loads
    window.addEventListener('load', function() {
      document.querySelector('.container').classList.add('animated');
    });
  </script>
</body>
</html>