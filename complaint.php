
<?php

$con = mysqli_connect('localhost', 'root', '','db_complaint');

// get the post records
$sdate = $_POST['sdate'];
$cmname = $_POST['cmname'];
$cmemail = $_POST['cmemail'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];

// database insert SQL code
$sql = "INSERT INTO `tbl_complaint` (`filldate`, `cname`, `cemail`, `subject`, `message`) VALUES ('$sdate', '$cmname', '$cmemail', '$sub','$msg')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "RECORDS INSERTED";
}

?>
