<?php session_start();?>
<?php if(isset($_SESSION['username'])){
     header("Location:admin_area.php");
};?> 
<?php require_once("connection/connection.php");?>
<!DOCTYPE html>
  <?php 
  $msg=null;
  if(isset($_POST['submit'])){
       require_once("connection/connection.php");
       $email =htmlspecialchars($_POST['email']);
       $email = addslashes($email);
       $pass = sha1($_POST['pass']);
       $query = "select username from login_info where username='{$email}' and password ='{$pass}' limit 1";
       $rs = mysqli_query($connection,$query);
       if(mysqli_num_rows($rs) == 1){
        $fnd = mysqli_fetch_array($rs,MYSQLI_ASSOC);
        $_SESSION['username']=$fnd['username'];
           header("Location:admin_area.php");
       }else{
        $msg = "<h3> <b>Username/password combination incorrect.<br /> Please make sure your caps lock key is off and try again.</b></h3>";
       }
 } else {
  if (isset($_GET['logout']) && $_GET['logout'] == 1) {
      $msg = "<h3> <b>You are now logged out.</b></h3>";
    } 
    $email = "";
    $pass = "";

 }
?> 
<html>
<head>
  <title>Admin Area : Login</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
    <?php echo $msg;?>
    <form action="admin_login.php" method="POST">
      <legend> <h2> Login</h2></legend>
    <div class="form-group has-success col-lg-6">
      <label class="control-label" >Email</label>
      <div class="input-group">
      <div class="input-group-addon">@</div>
        <input type="text" class="form-control" placeholder="Enter Email" name="email"id="email"><br/>
      </div></br>
      <label class="control-label" >Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="pass"id="pass"><br/>
      <button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>
    </div>	
    </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>