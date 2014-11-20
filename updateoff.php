<?php
require_once("connection/connection.php");
$name = null;
$email=null;
$designation=null;
$about=null;

$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
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
$query = "UPDATE office_bearers SET name = '{$name}', designation = '{$designation}', about = '{$about}' 
		  WHERE email = '{$email}'";
if($name!=null&&$email!=null &&$about!=null&& $designation!=null){
	//echo $query;
	$rs=mysqli_query($connection,$query);
	if(isset($rs)){
		echo "Values Updated Successfully";
	}
}else{
	echo "Insert Correct Values";
	header("Location: updateofficebearers.php");
	exit;
}
?>
<?php
$query= "select id from office_bearers where name='{$name}' and email='{$email}'";
$tid = mysqli_query($connection,$query);
$iid = mysqli_fetch_array($tid,MYSQLI_ASSOC);
$tmp_file = explode(".", $_FILES['file_upload']['name']);
$newfile = "{$iid[0]}.".end($tmp_file);
	$upload_dir = "uploads/office_bearers";
 	//echo $tmp_file;
 	echo "<br />";
 	//echo $target_file;
 	if(file_exists("uploads/office_bearers/$newfile")) unlink("uploads/office_bearers/$newfile");
	if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = $upload_errors[$error];
	}
	echo "<a href=\"admin_area.php\"> Return to Admin Area </a>";
?>