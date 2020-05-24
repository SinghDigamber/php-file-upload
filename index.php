<?php include("file-upload.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>PHP 7 Image Upload Example</title>
  <style>
    .container {
      max-width: 450px;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">Upload File in PHP 7</h3>

      <div class="user-image mb-3 text-center">
        <div style="width: 100px; height: 100px; overflow: hidden; background: #cccccc; margin: 0 auto">
          <img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
        </div>
      </div>

      <div class="custom-file">
        <input type="file" name="fileUpload" class="custom-file-input" id="chooseFile">
        <label class="custom-file-label" for="chooseFile">Select file</label>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Upload File
      </button>
    </form>

    <!-- Display response messages -->
    <?php if(!empty($resMessage)) {?>
    <div class="alert <?php echo $resMessage['status']?>">
      <?php echo $resMessage['message']?>
    </div>
    <?php }?>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imgPlaceholder').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#chooseFile").change(function () {
      readURL(this);
    });
  </script>
</body>

</html>