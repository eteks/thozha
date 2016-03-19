<?php
include('dbcon.php');
if (isset($_POST)){
	if(isset($_POST['selector'])){
		$id=$_POST['selector'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM related_image where related_image_id='$id[$i]'");
	}
	header("location: image_upload.php");
	}
	if(isset($_POST['selector1'])){
		$id=$_POST['selector1'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM related_video where related_video_id='$id[$i]'");
	}
	header("location: video_upload.php");
	}
	

}
?>