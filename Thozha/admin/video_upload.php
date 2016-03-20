<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <div class="span3" id="adduser">
                <?php include('add_video.php'); ?>
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
                                                <th>Youtube video id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                         		$query = mysql_query("SELECT * from related_video")or die(mysql_error());
										 		$i=1;
										 		while($row = mysql_fetch_array($query)){
										 ?>
										 <tr><td><input id="optionsCheckbox" class="uniform_on" name="selector1[]" type="checkbox" value="<?php echo $row['related_video_id']; ?>"></td><td><?php echo $i; ?></td><td>https://www.youtube.com/watch?v=<?php echo $row['video_url']; ?></td></tr>
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
