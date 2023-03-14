<div id="edit<?php echo $id ;?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert btn-warning"><strong style="color:white" >Edit Job Title &nbsp; <?php echo $id; ?></strong></div>
	<form class="form-horizontal" method="post" action="post_edit_sumbitted_job_title.php">
	<div class="control-group">
 					
<script>
function show_me(str) {
  if (str=="") {
    document.getElementById("sasino").innerHTML="";
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
      document.getElementById("sasino").innerHTML=xmlhttp.responseText;
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
  xmlhttp.open("GET","get_job_two.php?k="+str,true);
  xmlhttp.send();
}
</script>
				<label class="control-label" for="inputEmail">Higher Structure of Job Title </label>
				<div class="controls">
				<?php

$sql="SELECT * FROM level_one_job  ";
$samm=mysql_query($sql);
     ?>
	
<select name='Level_one_job' required  onchange="show_me(this.value)">
	  
		<div class="active"> <option  style="color:RED" value="<?php echo $row_one[0]; ?>"><?php echo $row_one[1]; ?> </option></div>
		
	    <?php while($rowp=mysql_fetch_array($samm)){  ?>
		  
		<option value="<?php echo $rowp[0]; ?>"><?php echo $rowp[1]; ?> </option>
	               
					    
							 <?php 
						 
						 }  
						 ?>
						 
						   </select>
			
				</div>
		

			</div>
	
	<div id="sasino">  </div>
	
	
	
	
	
			<div class="control-group">
				<label class="control-label" for="inputEmail">Meduim Structure of Job Title</label>
		<div class="controls">
				<input type="hidden" id="inputEmail" name="Job_id"    value="<?php echo $row[1]; ?>" required>
				<input type="text"   id="inputEmail" name="Job_title" value="<?php echo $row[2]; ?>" required>
		</div>
			</div>
			
		
    <div class="control-group">
				<div class="controls">
				<button name="Edit_Job_two" type="submit" class="btn btn-warning"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	