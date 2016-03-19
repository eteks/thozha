
<?php 
	
	include('dbcon.php');
	if(isset($_GET['post_comment'])){
		$sql = "insert into comment (content,created,fullname,id,modified,parent,profile_picture_url,upvote_count) values ('".$_POST['content']."','".$_POST['created']."','".$_POST['fullname']."','".$_POST['id']."','".$_POST['modified']."','".$_POST['parent']."','".$_POST['profile_picture_url']."','".$_POST['upvote_count']."')";
		echo $sql;
		mysql_query($sql);
	}
	if(isset($_GET['get_comments'])){
		$arr = array();
		$query = mysql_query("select * from comment");
		while($row = mysql_fetch_assoc($query)){
			$arr[] = $row; 
		}		
		print(json_encode($arr));
	}
?>
