<?php
require_once("constants.php");

// 1. Create a database connection
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// 2. Select a database to use 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	//echo "ds,fgh kldsfsdhfg dfgkjh ,fd ghdfsgkldf;gklh kdfshg;kdjsfgsdfkgbn,dfksh gdfsgklhdfg;";
  }
?>
