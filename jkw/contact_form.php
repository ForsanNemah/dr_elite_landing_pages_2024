<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom CSS styling */
    /* Add your own custom styles here */
    

    .contact-form {
      margin-top: 50px;
      background-color: #007bff;
    }

    .contact-form .form-control {
      background-color: #fff;
      color: #000;
      border-color: #fff;
      border-radius: 0;
    }

    .contact-form .form-control:focus {
      box-shadow: none;
    }

    .contact-form .btn-primary {
      background-color: #fff;
      color: #007bff;
      border-radius: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Contact Us</h2>
        <form class="contact-form">
          <div class="form-group">
            <label for="name" class="text-right">اسم</label>
            <input type="text" class="form-control text-right" id="name" placeholder="أدخل اسمك">
          </div>
          <div class="form-group">
            <label for="phone" class="text-right">هاتف</label>
            <input type="text" class="form-control text-right" id="phone" placeholder="أدخل رقم هاتفك">
          </div>
          <div class="form-group">
            <label for="service" class="text-right">الخدمة</label>
            <input type="text" class="form-control text-right" id="service" placeholder="أدخل الخدمة التي تهتم بها">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 
</body>

</html>