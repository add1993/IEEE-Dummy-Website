<?php 
  $ans = null;
  $collegenameerr = null;
  $emailerr= null;
  $phoneerr=null;
  $nameerr = null;
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



<?php
  if(isset($_POST['submit'])){
    $n = "cool0";
    require_once("connection/connection.php");
    require_once("check.php");
    require_once("error.php");
    $collegename=null;
    
    $email=null;
    
    $phone=null;
    
    if(empty($_POST["name"])){
      $nameerr="Required field!!!!!";
    }elseif(chkname($_POST["name"])){
      $name = mysql_real_escape_string($_POST["name"]);
    }else{
      $nameerr="Only char and whitespaces allowed!!!!";
    }
      $collegename = mysql_real_escape_string($_POST["college_name"]);

    if(empty($_POST["email"])){
      $emailerr="Required field!!!!!";
    }else if(chkemail($_POST["email"])){
     $email = mysql_real_escape_string($_POST['email']);
    }else{
      $emailerr="Invalid Email!!!!!";
    }
    if(empty($_POST['phone'])){
      $phoneerr="Required field!!!!";
    }elseif(chkphone($_POST['phone'])){
      $phone =mysql_real_escape_string($_POST['phone']);
    }else{
      $phoneerr="Invalid phone!!!!!!";
    }
     $query = "insert into members values('','{$name}','{$collegename}','{$email}','{$phone}')";

    if($nameerr == null && $emailerr == null&&$phoneerr==null){
      $rs=mysqli_query($connection,$query);
      if(isset($rs)){
        //echo 
        $ans="query success: Successfully insertion of members!!!";
      }
    }else{
      //echo 
      $ans="query problem : somthing went wrong or may be already an user!!!";
    }
    $query= "select id from members where name='{$name}' and email='{$email}'";
    $tid = mysqli_query($connection,$query);
    $iid = mysqli_fetch_array($tid,MYSQLI_ASSOC);
    $tmp_file = explode(".", $_FILES['file_upload']['name']);
    $newfile = "{$iid[0]}.".end($tmp_file);
      $upload_dir = "uploads/members";
      //echo $tmp_file;
     // echo "<\br>";
      //echo $target_file;
      if(file_exists("uploads/members/$newfile")) unlink("uploads/members/$newfile");
      if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile) && $emailerr==null&&$nameerr==null&&$phoneerr==null) {
      //  $message = "File uploaded successfully.";
       $ans .= "(y)";
     //   header("Location:addmembers.php");
      } else {
        $query = "DELETE FROM members WHERE email = '{$email}' LIMIT 1";
        mysqli_query($connection,$query);
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
        $ans = "NOT able to insert data!!!!";
          // header("Location:addmembers.php");
      }
    }else{
      
    }

?>

  <section class="container">
    <?php include "_/components/php/header.php"; ?>
    <div class="content row col-lg-6" style="padding-left:20px; padding-bottom:20px;">
      <?php echo $ans;?>
      <form action="addmembers.php" enctype="multipart/form-data" method="POST">
      <div class="form-group has-success">
        <label class="control-label" >*Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"><?php echo $nameerr;?><br/>
        <label class="control-label" >College Name</label>
        <input type="text" class="form-control" name="college_name" placeholder="Enter College" id="college_name"><br/>
        <label class="control-label" >*Email</label>
        <div class="input-group">
        <div class="input-group-addon">@</div>
        <input type="text" class="form-control" placeholder="Enter Email" name="email"id="email"><?php echo $emailerr;?><br/>
        </div></br>
        <label class="control-label" >Phone</label>
        <input type="text" class="form-control" placeholder="Enter Phone No." name="phone"id="phone"><?php echo $phoneerr;?><br/>
        <label class="control-label" >Image</label>
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