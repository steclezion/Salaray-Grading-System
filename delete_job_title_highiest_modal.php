	<div id="delete_Job_title<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert  btn-danger"><strong style="color:white"> Are you Sure you want to Delete this Job Title <?php echo $id; ?>  ? </strong></div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_job_title_highiest.php<?php echo '?id='.$id; ?>><i class="icon-check"></i>&nbsp;Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
