
<?php 
	session_start();
	include('dbcon.php');
	if(isset($_GET['post_comment'])){
		$sql = "insert into comment (content,created,fullname,id,modified,parent,profile_picture_url,upvote_count) values ('".$_POST['content']."','".$_POST['created']."','".$_POST['fullname']."','".$_POST['id']."','".$_POST['modified']."','".$_POST['parent']."','".$_POST['profile_picture_url']."','".$_POST['upvote_count']."')";
		
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
	if(isset($_GET['captcha_check'])){
		if(strtolower($_POST['code']) == strtolower($_SESSION['random_number'])){
			echo "valid";	
		}
		else{
			echo "invalid";
		}
	}
	if(isset($_GET['email_check'])){
		$sql = "SELECT contest_email FROM contest WHERE contest_email = '".$_POST['email']."'";
		$select=mysql_query($sql);
		$row = mysql_fetch_assoc($select);
		if (mysql_num_rows($select) > 0) {
    		echo "exist";
		}else { echo 'notexist'; }
	}
	
	if(isset($_GET['mobile_check'])){
		$sql = "SELECT contest_mobile FROM contest WHERE contest_mobile = '".$_POST['mobileno']."'";
		$select=mysql_query($sql);
		$row = mysql_fetch_assoc($select);
		if (mysql_num_rows($select) > 0) {
    		echo "exist";
		}else { echo 'notexist'; }
	}
	if(isset($_GET['category_rel'])){
		$arr = array();
		if($_POST['data_id']=='0'){
			$sql = "SELECT * FROM related_image order by related_image_id desc";
		}else{
			$sql = "SELECT * FROM related_image WHERE category_id = '".$_POST['data_id']."'order by related_image_id desc limit 9";
		}
		
		$select=mysql_query($sql);
		while($row = mysql_fetch_assoc($select)){
			$arr[]=$row;
		}
		print(json_encode($arr));
		
	}
?>
