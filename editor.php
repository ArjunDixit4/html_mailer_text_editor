<!DOCTYPE html5>
<head>
  <title>Html Mailer</title>
<!-- <link rel="stylesheet" href="css/materialize.min.css"> --> 
  <style type="text/css">
    .text{
      padding: 100px 400px 10px 400px;
    }



  </style>
</head>
<body>
  <form action="form_handler.php" method="post">
    <div class="text">
      <textarea cols="80" rows="10" name="content"> 
      </textarea>
      <script src="ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
        // CKEDITOR.replace( 'content' );
        CKEDITOR.replace('content');
      </script>
    </div>
  </form>
</body>
</html>