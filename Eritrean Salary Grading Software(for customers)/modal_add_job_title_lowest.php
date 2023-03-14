	<div id="add_job_title_lowest" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<?php $est_queryu=mysql_query("select Max(Level_Three_ID) from level_three_job")or die(mysql_error());
	
		    
					$row=mysql_fetch_array($est_queryu);
					  $addd=$row[0] + 1;                                                                                                        
			


										?>
				<div class="alert btn-inverse"><strong style="color:white">Add Job Title</strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
		<div class="controls">
				<input type="text" id="inputEmail" name="ID"  value="<?php echo $addd; ?>"  readonly     placeholder=" Establishment ID" required>
				</div>
				<br/>
<div class="control-group">
 					
<script>
function show_me(str) {
  if (str=="") {
    document.getElementById("txt_sam").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txt_sam").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","get_job.php?k="+str,true);
  xmlhttp.send();
}
function show_you(str) {
  if (str=="") {
    document.getElementById("mamino").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("mamino").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","get_job_two.ph?k="+str,true);
  xmlhttp.send();
}
</script>
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
			<div id="txt_sam">  </div>
			<div class="control-group">
				<label class="control-label" for="inputEmail"> Job Title </label>
				<div class="controls">
				<input type="text" id="inputtinnumber" name="jobino_Title" placeholder="Job_Title" required>
				</div>
			   </div>
				
			   
            <div class="control-group">
				<div class="controls">
				<button name="submit_add_lowest" type="submit" class="btn btn-inverse"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>




		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
   </form>
   
	
		 
 