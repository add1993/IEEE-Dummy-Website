<?php
require_once("connection/connection.php");
$email = NULL;
$email = $_POST['email'];
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
$query = "DELETE FROM office_bearers WHERE email = '{$email}' LIMIT 1";
$query2 = "select id from office_bearers where email='{$email}'";
if($email!=null){
	//echo $query;
	$id=mysqli_query($connection,$query2);
	$newfile =mysqli_fetch_array($id,MYSQLI_ASSOC);
	$newfile["id"].=".jpg";
	$img = $newfile["id"];
	unlink("uploads/office_bearers/$img");
	$rs=mysqli_query($connection,$query);
	if(isset($rs)){
		echo "Office Bearer Deleted";
	}
}else{
	echo "Insert Correct Values";
	header("Location: deleteofficebearers.php");
	exit;
}
?>
<?php
	echo "<a href=\"admin_area.php\"> Return to Admin Area </a>";
?>