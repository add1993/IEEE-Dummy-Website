<?php session_start();?>
<?php if(!isset($_SESSION['username'])){
     header("Location:admin_login.php");
   };?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Area</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:45px; padding-right:45px; padding-bottom:20px;">
   <p><h2><b>Welcome to the Admin Area <?php echo $_SESSION['username'];?><a href="logout.php" class="pull-right">Logout  </b> </a></h2></p> <!-- authenticate the user -->
   <h3><span class="glyphicon glyphicon-user"></span> Add, Update, Delete Office Bearers</h3>
   <ul style="padding-left:20px;">
      <li> <a href="addofficebearers.php"> Add New Office Bearer </a> </li>
      <li> <a href="updateofficebearers.php"> Update Office Bearer </a> </li>
      <li> <a href="deleteofficebearers.php"> Delete Office Bearer </a> </li>
   </ul>
   <h3><span class="glyphicon glyphicon-user"></span> Add, Update, Delete Members</h3>
   <ul style="padding-left:20px;">
      <li> <a href="addmembers.php"> Add New Member </a> </li>
      <li> <a href="updatemembers.php"> Update Member </a> </li>
      <li> <a href="deletemembers.php"> Delete Member </a> </li>
   </ul>
   <h3><span class="glyphicon glyphicon-cog"></span> Add, Update, Delete Event</h3>
   <ul style="padding-left:20px;">
      <li> <a href="addevent.php"> Add New Event</a> </li>
      <li> <a href="updateevent.php"> Update Event </a> </li>
      <li> <a href="deleteevent.php"> Delete Event </a> </li>
   </ul>
   <h3><span class="glyphicon glyphicon-upload"></span> Upload, Delete Carousel Images</h3>
   <ul style="padding-left:20px;">
      <li> <a href="upload_carousel.php"> Add New Carousel images</a> </li>
   </ul>
   <h3><span class="glyphicon glyphicon-list-alt"></span> Add, Delete Announcements</h3>
   <ul style="padding-left:20px;">
      <li> <a href="addnews.php"> Add New Announcements</a> </li>
      <li> <a href="deletenews.php"> Delete Announcements</a> </li>
   </ul>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
    <script src="_/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="_/js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/search.js"></script>
</body>
</html>