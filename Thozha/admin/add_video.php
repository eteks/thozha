<?php
include('dbcon.php');
if (isset($_POST['save'])) {
	$urls = parse_url($_POST['url']);
	$url_id = explode("=", $urls['query']);
	$sql = "insert into related_video (video_url,status) values ('".$url_id[1]."','1')";
	mysql_query($sql);
}
?>
<div class="row-fluid">
    <div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add User</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" enctype="multipart/form-data">
					<div class="control-group">
						<div class="controls">
							<textarea name="url"></textarea>
						
						</div>
					</div>
					<div class="control-group">
							<div class="controls">
								<button type="submit" name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
							</div>
                    </div>
                </form>
			</div>
        </div>
    </div>
    <!-- /block -->
</div>
