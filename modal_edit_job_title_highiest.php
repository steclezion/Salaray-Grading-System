<div id="edit<?php echo $id ;?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert btn-danger"><strong style="color:white" >Edit Job Title &nbsp; <?php echo $id; ?></strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Job Title Name</label>
		<div class="controls">
				<input type="hidden" id="inputEmail" name="Job_id" value="<?php echo $row[0]; ?>" required>
				<input type="text" id="inputEmail" name="Job_title" value="<?php echo $row[1]; ?>" required>
		</div>
			</div>
			
		
    <div class="control-group">
				<div class="controls">
				<button name="Edit_Job_one" type="submit" class="btn btn-danger"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	