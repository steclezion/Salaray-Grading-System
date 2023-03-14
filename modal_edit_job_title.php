<div id="edit<?php echo $id ;?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="">
		<div class="modal-body">
			<div class="alert btn-inverse"><strong style="color:white" >Edit Job Title &nbsp; <?php echo $id; ?></strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Job Title Name</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="Job_id" value="<?php echo $row[3]; ?>" required>
				<input type="text" id="inputEmail" name="Job_title" value="<?php echo $row[2]; ?>" required>
			</div>
			</div>
			
			<div class="control-group">
<label class="control-label" for="inputEmail">PHD-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[1]; ?>"  name="phd" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Masters-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[11]; ?>"  name="master" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">FistDegree-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[10]; ?>"  name="First_Degree" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Diploma-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[9]; ?>"  name="Diploma" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Certificate-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[8]; ?>"  name="Certificate" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Highschool-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[7]; ?>"  name="highschool" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Junior-Grade</label>
				<div class="controls">
<input type="text" id="inputtinnumber" value="<?php echo $row[6]; ?>"  name="junior" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Elementary-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[5]; ?>"  name="Elementary" placeholder="Set Grade" required>
				</div>
			</div>
			<div class="control-group">
<label class="control-label" for="inputEmail">Illetrate-Grade</label>
				<div class="controls">
				<input type="text" id="inputtinnumber" value="<?php echo $row[4]; ?>"  name="illtrate" placeholder="Set Grade" required>
				</div>
			</div>
    <div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-inverse"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	