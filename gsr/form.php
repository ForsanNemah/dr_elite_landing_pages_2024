<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>تقرير حملات المسواك</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function changeButtonText() {
      var submitButton = document.getElementById("submitBtn");
      submitButton.innerHTML = "انتظر دقيقة  لعرض التقرير ...";
    }
  </script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control {
      border-radius: 0;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 0;
    }
    .form-container {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
    }
    .center {
      display: flex;
      justify-content: center;
    }
  </style>
</head>
<body>
  <div class="h-50 d-flex align-items-center justify-content-center">
    <form method="post" action="api.php" class="form-container">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">من</label>
        <input value="2024/05/25 00:00:00" name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">إلى</label>
        <input value="2024/05/26 00:00:00" name="to" type="text" class="form-control" id="exampleInputPassword1" placeholder=" ">
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">رقم الورقة</label>
        <input value="1uJO1waCXuGG5zYk4BvYFltc7_QfZyCbpI704yJYc9iA" name="sheet_id" type="text" class="form-control" id="exampleInputPassword1" placeholder=" ">
      </div>
      <br>
      <div class="center">
        <button type="submit" class="btn btn-primary" id="submitBtn" onclick="changeButtonText()">عرض</button>
      </div>
    </form>
  </div>
</body>
</html>