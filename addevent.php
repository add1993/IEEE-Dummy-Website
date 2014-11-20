<?php session_start();?>
<?php if(!isset($_SESSION['username'])){
     header("Location:admin_login.php");
   };
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Area - Add Members</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
  <section class="container">
    <?php include "_/components/php/header.php"; ?>
    <div class="content row col-lg-6" style="padding-left:20px; padding-bottom:20px;">
      <form action="addeve.php" enctype="multipart/form-data" method="POST">
      <div class="form-group has-success">
        <label class="control-label" >Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"><br/>
         <label class="control-label" >About</label>
      <textarea class="form-control" rows="3" name="about"id="about"></textarea><br/>
        <label class="control-label" >Image</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file_upload" />
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="admin_area.php" class="btn btn-primary" role="button"> Back </a>
      </div>	
      </form>
    </div>
    <?php include "_/components/php/footer.php"; ?>
  </section>
</body>
</html>