<?php
require_once("connection/connection.php");
$phone = null;
$phone = $_POST['phone'];
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
$query = "DELETE FROM members WHERE phone = '{$phone}' LIMIT 1";
$query2 = "select id from members where phone='{$phone}'";
if($phone!=null){
	//echo $query;
	$id=mysqli_query($connection,$query2);
	$newfile =mysqli_fetch_array($id,MYSQLI_ASSOC);
	$newfile["id"].=".jpg";
	$img = $newfile["id"];
	unlink("uploads/members/$img");
	$rs=mysqli_query($connection,$query);
	if(isset($rs)){
		echo "Member Deleted";
	}
}else{
	echo "Insert Correct Values";
	echo "<a href=\"deletemembers.php\"> Return </a>";
	exit;
}
?>
<?php
	echo "<a href=\"admin_area.php\"> Return to Admin Area </a>";
?>