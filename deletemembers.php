<!DOCTYPE html>
<html>
<head>
  <title>Admin Area - Delete Member</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
    <form action="deletememb.php"enctype="multipart/form-data" method="POST">
      <legend> <h2> Delete Member </h2></legend>
        <div class="form-group has-success col-lg-6">
          <label class="control-label" >Phone</label>
        <input type="text" class="form-control" placeholder="Enter Phone No." name="phone"id="phone"><br/>
          <button type="submit" class="btn btn-primary">Delete</button>
          <a href="admin_area.php" class="btn btn-primary" role="button"> Back </a>
        </div>	
    </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>