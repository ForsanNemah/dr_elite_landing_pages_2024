<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <style>
    .rtl-item {
      direction: rtl;
      text-align: right;
    }
  </style>
  <title>Modal Popup Example</title>
</head>
<body>
  <div class="container">
    <h1>Modal Popup Example</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      Open Modal
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Item List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">



          <?php
$filename = 'branches.txt';
$file = fopen($filename, 'r');

// Read the file line by line
while (($line = fgets($file)) !== false) {
    // Check if it's the last line
    if (!feof($file)) {
        // Process the line
       // echo $line;

       echo '


<li class="list-group-item rtl-item" onclick="alertItemName(this)">'.$line.'</li>




';
    }
}

fclose($file);
?>



         
  




          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function alertItemName(item) {
      var itemName = item.innerHTML;
      alert(itemName);
    }
  </script>
</body>
</html>