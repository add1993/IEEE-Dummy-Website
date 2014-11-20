<?php
require_once("connection/connection.php");
$name = null;
$about=null;

$name = $_POST['name'];
$about = $_POST['about'];
$upload_errors = array(
	UPLOAD_ERR_OK 				=> "No errors.",
	UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
  UPLOAD_ERR_NO_FILE 		=> "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
);
$query = "insert into news values('','{$name}','{$about}')";
if($name!=null&&$about!=null){
	//echo $query;
	$rs=mysqli_query($connection,$query);
	if(isset($rs)){
		echo "Values Inserted Successfully";
	}
}else{
	echo "Insert Correct Values";
	header("Location: addnews.php");
	exit;
}
?>
<?php
$query= "select id from news where name='{$name}'";
$tid = mysqli_query($connection,$query);
$iid = mysqli_fetch_array($tid,MYSQLI_ASSOC);
$tmp_file = explode(".", $_FILES['file_upload']['name']);
$newfile = "{$iid[0]}.".end($tmp_file);
	$upload_dir = "uploads/news";
 	echo $tmp_file;
 	echo "<br />";
 	echo $newfile;
 	if(file_exists("uploads/news/$newfile")) unlink("uploads/news/$newfile");
	if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = $upload_errors[$error];
	}
	echo "<a href=\"admin_area.php\"> Return to Admin Area </a>";
?>