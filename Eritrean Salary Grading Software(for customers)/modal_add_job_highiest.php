	<div id="add_job_title" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
		<?php $est_query=mysql_query("select Max(Level_One_ID) from level_one_job")or die(mysql_error());
	
		    
					$row=mysql_fetch_array($est_query);
					  $add=$row[0] + 1;                                                                                                        
			


										?>
				<div class="alert btn-danger"><strong style="color:white">Add Highiest Job Classification</strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
		  <div class="controls">
				<input type="text" id="inputEmail" name="ID"  value="<?php echo $add; ?>"  readonly     placeholder=" Establishment ID" required>
				</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail"> Job Title Name </label>
				<div class="controls"> 
				<input type="text" id="inputtinnumber" name="jobino_Title" placeholder="Job_Title" required>
				
				</div>
			   </div>
				
			   
            <div class="control-group">
				<div class="controls">
				<button name="submit_add_high" type="submit" class="btn btn-danger"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>




		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
   </form>
   
	
		 
 