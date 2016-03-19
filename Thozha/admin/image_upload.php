<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <div class="span3" id="adduser">
                <?php include('add_image.php'); ?>
            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Image upload</div>
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
                                                <th>S.No</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                         $query = mysql_query("SELECT * from related_image")or die(mysql_error());
										 $i=1;
										 while($row = mysql_fetch_array($query)){
										 ?>
										 <tr><td><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $row['related_image_id']; ?>"></td><td><?php echo $i; ?></td><td><img src="<?php echo 'uploads/original/'.$row['image']; ?>" /></td></tr>
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
