<?php
require_once("connection/connection.php");
$name = NULL;
$name = $_POST['name'];
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
$query = "DELETE FROM news WHERE name = '{$name}' LIMIT 1";
$query2 = "select id from news where name='{$name}'";
if($name!=null){
	//echo $query;
	$id=mysqli_query($connection,$query2);
	$newfile =mysqli_fetch_array($id,MYSQLI_ASSOC);
	$newfile["id"].=".jpg";
	$img = $newfile["id"];
	echo $img;
	unlink("uploads/news/$img");
	$rs=mysqli_query($connection,$query);
	if(isset($rs)){
		echo "<br/>News Deleted<br/>";
		//$newfile = basename($id);
	}
}else{
	echo "Insert Correct Values";
	header("Location: deletenews.php");
	exit;
}
?>
<?php
	echo "<a href=\"admin_area.php\"> Return to Admin Area </a>";
?>