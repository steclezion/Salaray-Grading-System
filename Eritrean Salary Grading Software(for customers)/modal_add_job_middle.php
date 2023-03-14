	<div id="add_job_title" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<?php $est_query=mysql_query("select Max(Level_Two_ID) from level_Two_job")or die(mysql_error());
	
		    
					$row=mysql_fetch_array($est_query);
					  $add=$row[0] + 1;                                                                                                        
			


										?>
				<div class="alert btn-warning"><strong style="color:white">Add Highiest Job Classification</strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
		  <div class="controls">
				<input type="text" id="inputEmail" name="ID"  value="<?php echo $add; ?>"  readonly     required>
				</div>
				<br>
				<div class="control-group">
 					
				<label class="control-label" for="inputEmail">Higher Structure of Job Title </label>
				<div class="controls">
				<?php

$sql="SELECT * FROM level_one_job ";
$samm=mysql_query($sql);
     ?>
	
<select name='Level_one_job' required  onchange="show_me(this.value)">
	  
		<option value="" ></option>
	    <?php while($row=mysql_fetch_array($samm)){  ?>
		  
		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
		

			</div>

				
				
				
				

			<div class="control-group">
				<label class="control-label" for="inputEmail"> Job Title Name </label>
				<div class="controls"> 
				<input type="text" id="inputtinnumber" name="jobino_Title" placeholder="Job_Title" required>
				
				</div>
			   </div>
				
			   
            <div class="control-group">
				<div class="controls">
				<button name="submit_add_Middle" type="submit" class="btn btn-warning"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>




		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
   </form>
   
	
		 
 