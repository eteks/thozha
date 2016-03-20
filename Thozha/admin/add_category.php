<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
include('dbcon.php');
if (isset($_POST['cate_save'])) {
	$category = $_POST['category'];
	$sql = "insert into category (category_name,status) values ('$category','1')";
	mysql_query($sql);
}
?>
<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <div class="span3" id="adduser">
                <div class="row-fluid">
    <div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add Category</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" enctype="multipart/form-data">
					<div class="control-group">
						<div class="controls">
							<input type="text" name='category' value="" required="">						
						</div>
					</div>
					<div class="control-group">
							<div class="controls">
								<button type="submit" name="cate_save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
							</div>
                    </div>
                </form>
			</div>
        </div>
    </div>
    <!-- /block -->
</div>

            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Video upload</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <form action="delete_users.php" method="post">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                        <a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
                                        <?php include('modal_delete.php'); ?>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>S.no</th>
                                                <th>Category Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                         		$query = mysql_query("SELECT * from category")or die(mysql_error());
										 		$i=1;
										 		while($row = mysql_fetch_array($query)){
										 ?>
										 <tr><td><input id="optionsCheckbox" class="uniform_on" name="selector2[]" type="checkbox" value="<?php echo $row['category_id']; ?>"></td><td><?php echo $i; ?></td><td><?php echo $row['category_name']; ?></td></tr>
										 <?php
										 		$i++;
										 	}
                                         ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>
