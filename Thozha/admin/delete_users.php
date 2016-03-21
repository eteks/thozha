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
	
	
	
	
	if(isset($_POST['selector2'])){
		$id=$_POST['selector2'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM category where category_id='$id[$i]'");
	}
	header("location:add_category.php");
	}
	
	
	
	if(isset($_POST['selector3']) && isset($_POST['delete_user'])){
	$id=$_POST['selector3'];
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysql_query("DELETE FROM contest where contest_image='$id[$i]'");
	}
	header("location:dashboard.php");
	}
	if(isset($_POST['selector3']) && isset($_POST['download_image'])){
	$id=$_POST['selector3'];
	$N = count($id);
	$files = array();
	for($i=0; $i < $N; $i++)
	{
		$test = explode('/',$id[$i]);
		$files[]=$test[2];
		
	}
	print_r($files);
	$zipname = 'contest'.time().'.zip';
	$file_path=$_SERVER['DOCUMENT_ROOT'].'/Thozha/uploads/original/';
	$zip = new ZipArchive();
 	if($zip->open($zipname, ZIPARCHIVE::CREATE)!==TRUE){       // Opening zip file to load files
        echo "* Sorry ZIP creation failed at this time<br/>";
    }
	foreach ($files as $file) {
		print($file_path.$file);
	    $zip->addFile($file_path.$file,$file);
	}
	$zip->close();
	if(file_exists($zipname)){
		header('Content-Type: application/zip');
		header('Content-disposition: attachment; filename='.$zipname);
		readfile($zipname);
		header("location:dashboard.php");
		}
	}
	
	if(isset($_GET['get_category'])){
		$sql = 'select * from category';
		$query = mysql_query($sql);
		while($row = mysql_fetch_array($query)){
			echo "<option value=".$row['category_id'].">".$row['category_name']."</option>";
		}
	}

}
?>