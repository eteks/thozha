<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
        	<?php include('sidebar_dashboard.php'); ?>
        	<div class="span9" id="content">
                <div class="row-fluid"></div>
                	<div class="row-fluid">
            			<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Selfie Contest</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                        	      <form action="delete_users.php" method="post">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    	
                                    	<a data-toggle="modal" id="delete"  class="btn btn-success download_btn" name=""><i class="icon-download icon-large"></i></a>
                                    	<a data-toggle="modal" id="delete"  class="btn btn-danger delete_btn" name=""><i class="icon-trash icon-large"></i></a>
                                        <?php include('modal_delete.php'); ?>
                                        <thead>
                                            <tr>
                                            	<th><input type="checkbox" class="checkall"></th>
                                                <th>S.No</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>State/City</th>
                                                <th>Comment</th>
                                                <th>Image</th>
                                                
                                           </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $subject_query = mysql_query("select * from contest") or die(mysql_error());
												$i = 1;   
												while($row = mysql_fetch_array($subject_query)){
                                                ?>
                                                <tr>
                                                	<td><input id="optionsCheckbox" class="uniform_on" name="selector3[]" type="checkbox" value="<?php echo $row['contest_image']; ?>"></td>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['contest_email']; ?></td>
                                                    <td><?php echo $row['contest_mobile']; ?></td>
                                                    <td><?php echo $row['contest_name']; ?></td>
                                                    <td><?php echo $row['contest_comment']; ?></td>
                                                    <td><a class="example-image-link" href="../<?php echo $row['contest_image']; ?>" data-lightbox="example-2" data-title="<?php echo $row['contest_comment']; ?>"><img class="example-image" src="../<?php echo $row['contest_image']; ?>" alt="image-1" height="50" width="50"/></a>
													<!-- <img src="../<?php echo $row['contest_image']; ?>" height="50" width="50"></td> -->
                                                </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                    </table>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
         <script src="js/lightbox-plus-jquery.js"></script>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
   	<script type="text/javascript">
   		$('.zip_file_download').click(function(){
   			$('#zip_download').hide();
   			$('.modal-backdrop').hide();
   		});
   		$('.checkall').change(function(){
   			
   			if(this.checked){
   				$(".uniform_on").prop('checked', $(this).prop("checked"));
   				$('.download_btn').attr('href','#zip_download');
   				$('.delete_btn').attr('href','#user_delete');
   			}else{
   				$('.uniform_on').removeAttr('checked');
   				$('.download_btn').removeAttr('href');
   				$('.delete_btn').removeAttr('href');
   			}
   		});
   		
   		$('.uniform_on').change(function(){
   			if($('.uniform_on').is(":checked")){
   				$('.download_btn').attr('href','#zip_download');
   				$('.delete_btn').attr('href','#user_delete');
   			}else{
   				$('.download_btn').removeAttr('href');
   				$('.delete_btn').removeAttr('href');
   			}
   		});
   		$('.download_btn').click(function(){
   			if(!$('.uniform_on').is(":checked")){
 				alert('Please check any one record!');
   			}
   		});
   		$('.delete_btn').click(function(){
   			if(!$('.uniform_on').is(":checked")){
 				alert('Please check any one record!');
   			}
   		});
   	</script>
</body>

</html>