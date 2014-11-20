<?php session_start();?>
<?php if(!isset($_SESSION['username'])){
     header("Location:admin_login.php");
   };
   $ans = null;
    $name = null;
    $nameerr = null;
    $email=null;
    $emailerr= null;
    $designation=null;
    $designationerr = null;
    $about=null;
    $abouterr=null;
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


<?php
  if(isset($_POST['submit'])){
   
    require_once("connection/connection.php");
    require_once("check.php");
    require_once("error.php");
    
    if(empty($_POST["name"])){
      $nameerr="Required field!!!!!";
    }elseif(chkname($_POST["name"])){
      $name = mysqli_real_escape_string($connection, $_POST["name"]);
    }else{
      $nameerr="Only char and whitespaces allowed!!!!";
    }
    if(empty($_POST["email"])){
      $emailerr="Required field!!!!!";
    }else if(chkemail($_POST["email"])){
     $email = mysqli_real_escape_string($connection, $_POST['email']);
    }else{
      $emailerr="Invalid Email!!!!!";
    }
   $designation=$_POST['designation'];
   $about=$_POST['about'];
    $query = "insert into office_bearers values('','{$name}','{$email}','{$designation}','{$about}')";

    if($nameerr == null && $emailerr == null){
      $rs=mysqli_query($connection,$query);
      if(isset($rs)){
        //echo 
        $ans="<b> Successfully Insertion of Members </b>";
      }
    }else{
      //echo 
      $ans="query problem : somthing went wrong or may be already an user!!!";
    }
    $query= "select id from office_bearers where name='{$name}' and email='{$email}'";
    $tid = mysqli_query($connection,$query);
    $iid = mysqli_fetch_array($tid,MYSQLI_ASSOC);
    $tmp_file = explode(".", $_FILES['file_upload']['name']);
    $newfile = "{$iid[0]}.".end($tmp_file);
      $upload_dir = "uploads/office_bearers";
      //echo $tmp_file;
     // echo "<\br>";
      //echo $target_file;
      if(file_exists("uploads/office_bearers/$newfile")) unlink("uploads/office_bearers/$newfile");
      if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile) && $emailerr==null&&$nameerr==null) {
      //  $message = "File uploaded successfully.";
     //   header("Location:addmembers.php");
      } else {
        $query = "DELETE FROM office_bearers WHERE email = '{$email}' LIMIT 1";
        mysqli_query($connection,$query);
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
        $ans .= "NOT able to insert data!!!!";
          // header("Location:addmembers.php");
      }
    }else{
      
    }

?>


<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
    <?php echo $ans;?>
    <form action="addofficebearers.php"enctype="multipart/form-data" method="POST">
      <legend> <h2> Add Office Bearers </h2></legend>
        <div class="form-group has-success col-lg-6">
          <label class="control-label" >Name</label><br/>
          <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"><?php echo $nameerr;?><br/>
          <label class="control-label" >Email</label>
          <div class="input-group">
          <div class="input-group-addon">@</div>
            <input type="text" class="form-control" placeholder="Enter Email" name="email"id="email"><?php echo $emailerr;?><br/>
          </div><br/>
          <label class="control-label" >Designation</label>
          <input type="text" class="form-control" placeholder="Enter Designation" name="designation"id="designation"><br/>
          <label class="control-label" >About</label>
          <textarea class="form-control" rows="3" name="about"id="about"></textarea><br/>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input type="file" name="file_upload" />
          <button type="submit" name="submit" id="submit"class="btn btn-primary">Submit</button>
          <a href="admin_area.php" class="btn btn-primary" role="button"> Back </a>
        </div>	
    </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>