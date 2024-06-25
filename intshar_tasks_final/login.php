<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-5 shadow">
      <h2 class="text-center mb-4">تسجيل الدخول</h2>
      <form method="post" action="check_user.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">   الرقم التسلسلي </label>
          <input name="user_id" type="number" class="form-control" id="id_login_form" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
          <input name="user_pass" type="number" class="form-control" id="pass_login_form">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">إرسال</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>