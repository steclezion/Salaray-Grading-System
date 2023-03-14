<div id="edit<?php echo $id ;?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert btn-danger"><strong style="color:white" >Edit Salary &nbsp; <?php echo $id; ?></strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Grade Number</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="salary_id" value="<?php echo $row[3]; ?>" required>
				<input type="number" id="inputEmail" name="Grade_Number" readonly value="<?php echo $row[4]; ?>" required>
			</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputEmail">Basic Salary </label>
				<div class="controls">
				<input type="number" id="inputtinnumber" value="<?php echo $row[0]; ?>"  name="Basic_Salary" placeholder="Basic Salary" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Gross Salary </label>
				<div class="controls">
				<input type="number" id="inputtinnumber" value="<?php echo $row[1]; ?>"  name="Gross_Salary" placeholder="Set Gross Salary" required>
				</div>
			</div>
    <div class="control-group">
				<div class="controls">
				<button name="edit_salary" type="submit" class="btn btn-danger"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	