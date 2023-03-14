	<div id="add_job_title" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
		
				<div class="alert btn-inverse"><strong style="color:white">set A Grade for Unsetted One </strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
		
<div class="control-group">
 					

				<label class="control-label" for="inputEmail">Set Grade</label>
				<div class="controls">
				<?php

$sql="SELECT * FROM grade_job_title where Grade =0  order by Job_Titile ASC";
$samm=mysql_query($sql);
     ?>
	
<select name='Level_one_job' required  onchange="show_me(this.value)">
	  
		<option value="" ></option>
	    <?php while($row=mysql_fetch_array($samm)){  ?>
		  
		<option value="<?php echo $row[3]; ?>"><?php echo $row[2]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
		

			</div>
			<div id="txt_sam">  </div>
		
				<div class="control-group">
				<label class="control-label" for="inputEmail">Assign Grade</label>
				<div class="controls">
				<input type="number" max="20" min="1" id="input" name="Assign_Grade" placeholder="Assign Grade" required>
				</div>
			   </div>
			   
            <div class="control-group">
				<div class="controls">
				<button name="submit_add" type="submit" class="btn btn-inverse"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>




		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
   </form>
   
	
		 
 