<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>m-cart</title>
  <link rel="icon" href="/assets/images/logo.jpg" type="image/jpg">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style-liberty.css">
  <link rel="stylesheet" href="/assets/css/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template CSS -->

    <!-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /> -->

</head>
<body>
{{View::make("admin.header")}}
@yield("content")
{{View::make("admin.footer")}}
<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
</body>
</html>