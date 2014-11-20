<?php session_start();?>
<?php if(!isset($_SESSION['username'])){
     header("Location:admin_login.php");
   };
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Area - Add Office Bearers</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
    <form action="deleteoff.php"enctype="multipart/form-data" method="POST">
      <legend> <h2> Delete Office Bearers </h2></legend>
        <div class="form-group has-success col-lg-6">
          <label class="control-label" >Email</label>
          <div class="input-group">
          <div class="input-group-addon">@</div>
            <input type="text" class="form-control" placeholder="Enter Email" name="email"id="email"><br/>
          </div><br/>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="admin_area.php" class="btn btn-primary" role="button"> Back </a>
        </div>	
    </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>