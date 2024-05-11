<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function changeButtonText() {
      var submitButton = document.getElementById("submitBtn");
      submitButton.innerHTML = "Processing...";
    }
  </script>
</head>
<body>
  <div class="h-50 d-flex align-items-center justify-content-center">
    <form method="post" action="api.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">From</label>
        <input value="2024/05/1 00:00:00" name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">To</label>
        <input value="2024/05/20 00:00:00" name="to" type="text" class="form-control" id="exampleInputPassword1" placeholder=" ">
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Sheet ID</label>
        <input value="1uJO1waCXuGG5zYk4BvYFltc7_QfZyCbpI704yJYc9iA" name="sheet_id" type="text" class="form-control" id="exampleInputPassword1" placeholder=" ">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" id="submitBtn" onclick="changeButtonText()">Submit</button>
    </form>
  </div>
</body>
</html>