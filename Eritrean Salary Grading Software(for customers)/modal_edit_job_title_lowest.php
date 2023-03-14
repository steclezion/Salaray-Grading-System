<div id="edit_sub<?php echo $id ;?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert btn-primary"><strong style="color:white" >Edit Job Title &nbsp; <?php echo $id; ?></strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
	<div class="control-group">

				<label class="control-label" for="inputEmail">High Structure of Job Title </label>
				<div class="controls">
				<?php

$sql="SELECT * FROM level_one_job  ";
$samm=mysql_query($sql);
     ?>
	
<select name='Level_one_job' required  onchange="show_mee(this.value)">
	  
	<div class="active"> <option  style="color:RED" value="<?php echo $row_two[0]; ?>"><?php echo $row_two[1]; ?> </option></div>
		
	    <?php while($rowp=mysql_fetch_array($samm)){  ?>
		  
		<option value="<?php echo $rowp[0]; ?>"><?php echo $rowp[1]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
		

			</div>
	<div class="control-group">

				<label class="control-label" for="inputEmail">Meduim Structure of Job Title </label>
				<div class="controls">
				<?php

$sql="SELECT * FROM level_two_job  ";
$samm=mysql_query($sql);
     ?>
	
<select name='Level_two_job' required  onchange="show_mee(this.value)">
	  
	<div class="active"> <option  style="color:RED" value="<?php echo $row_one[1]; ?>"><?php echo $row_one[2]; ?> </option></div>
		
	    <?php while($rowp=mysql_fetch_array($samm)){  ?>
		  
		<option value="<?php echo $rowp[1]; ?>"><?php echo $rowp[2]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
		

			</div>
	
	
	
	
	
			<div class="control-group">
				<label class="control-label" for="inputEmail">Meduim Structure of Job Title</label>
		<div class="controls">
				<input type="hidden" id="inputEmail" name="Job_id"    value="<?php echo $row[1]; ?>" required>
				<input type="text"   id="inputEmail" name="Job_title" value="<?php echo $row[2]; ?>" required>
		</div>
			</div>
			
		
    <div class="control-group">
				<div class="controls">
				<button name="Edit_Job_two" type="submit" class="btn btn-primary"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	