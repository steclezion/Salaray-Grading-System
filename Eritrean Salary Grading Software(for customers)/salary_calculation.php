
<?php include("header.php");
       include("dbcon.php");
	   include("session.php");
 ?>

	



			<script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
function printDi(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
			</script>
			
<?php  include("navbar_dashboard.php");?>
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Salary Grading System</h2>
						<div class="row">
								<div class="alert badge-inverse"><strong style="color:white">Salary Calculation</strong></div>
	<form class="form-horizontal" method="post">
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
  xmlhttp.open("GET","get_job_two.php?k="+str,true);
  xmlhttp.send();
}
function show_job(str) {
  if (str=="") {
    document.getElementById("mam").innerHTML="";
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
      document.getElementById("mam").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","get_job_man.php?k="+str,true);
  xmlhttp.send();
}
function show_amaz(str) {
  if (str=="") {
    document.getElementById("zoz").innerHTML="";
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
      document.getElementById("zoz").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","get_education.php?k="+str,true);
  xmlhttp.send();
}
</script>
				<label class="control-label" for="inputEmail" style="color:YELLOW">Higher Structure of Job Title </label>
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
				<label class="control-label" for="inputEmail" style="color:YELLOW"> Year OF Experience</label>
				<div class="controls">
				
				<select name="Year" >
				<option value=""> </option>
				<option value="0_3">0-3(Basic -Salary)</option>
				<option value="4_7">4-7</option>
				<option value="8_12">8-12</option>
				<option value="13_17">13-17</option>
				<option value="18_22">18-22</option>
				<option value="22">>22</option>
				</select>
				</div> 
			   </div>
      <!-- <div class="control-group">
				<label class="control-label" for="inputEmail" style="color:YELLOW">Education</label>
				<div class="controls">
				<select name="Year" >
				<option value=""> </option>
				<option value="ELEMENTARY"> ELEMENTARY</option>
				<option value="JUNIOR">JUNIOR </option>
				<option value="HIGH SCHOOL">HIGH SCHOOL</option>
				<option value="CERTIFICATE">CERTIFICATE</option>
				<option value="DIPLOMA">DIPLOMA</option>
				<option value="1st DEGREE">1st DEGREE</option>
				<option value="MASTERS">MASTERS</option>
				<option value="Ph.D">Ph.D</option>
				</select>
			
				</div>-->
		

			
				
				
				
	<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Calculate</button>
				</div>
			</div>




		</div>
	
    </div>
   </form>
   
   <?php if (isset($_POST['submit']))
   {   
    $parametric =$_POST['factor'];
	$job_Grade =$_POST['job_title_Grade'];
	$job_title =$_POST['Job_Title'];
	$salary =$_POST['salary'];
	
   
   
   ?><br><br>
   
   	  <div  class="container">   
		<form action="function.php" method="POST">
		<div class="pull-left">
	    <input  class='alert btn-danger' type="button" onClick="printDi('zebib')" value="Print/Pdf" />
		<input  type="submit" name="Export"  class='alert btn-primary'  value="Excel" />
					  <input  type="submit" name="rtf"  class='alert btn-primary'  value="RTF(Ritch Text Format)" />
					 
		         </div>                                                                                
                                </form>   
							
								</div>
								
      
			
			
					<div class="span" id="zebib">
				
                            <table cellpadding="1" cellspacing="1" border="2" class="table  table-bordered" id="example" >
                                <div class="alert btn-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-role icon-large" style="color:white"><mark>Calculated Salary For All Grades Of Jobs</mark></i></strong>
                                </div>
								
                                <thead>
                                    <tr>
									    <th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">Grade</th>
									  <th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">Basic Salary</th>
                                      <th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">0.1</th>                                 
                                      <th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron"> 0.2</th>   
										<th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">0.4</th> 
									    <th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">0.5</th> 
										<th colspan="1" rowspan="1" style="width:70px" tabindex="0" class="jumbotron">0.6</th> 
										<!--<th>Employee%</th> 
										<th>Monthly BUDGET</th> 
									    <th>Annual Budget</th> -->
                                     
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $role_query=mysql_query("select * from  salary ")or die(mysql_error());
								        mysql_query("delete from salary_excel");
									while($row=mysql_fetch_array($role_query))
								
									{ $cal=intval($row[0]*$parametric);
									  $cal_two=intval($cal*$parametric);
									  $cal_three=intval($cal_two*$parametric);
									  $cal_four=intval($cal_three*$parametric);
									  $cal_five=intval($cal_four*$parametric);
						$a=$row[4]; $b=$row[0];
									
									   mysql_query("insert into salary_excel (Grade,Basic_salary,4_7,8_12,13_17,18_22,22_larger) values ('$a','$b','$cal','$cal_two','$cal_three','$cal_four','$cal_five') ");
									
									
									
								?>	 <tr>
								    <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><mark ><u><span  ><?php echo $row[4]; ?></td> 
								    <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><u><span  ><?php echo $row[0]; ?></td> 
								  <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><span  ><?php echo $cal; ?></td> 
					    		   	  <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><span  ><?php echo $cal_two; ?></td> 
								 <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><span  ><?php echo $cal_three; ?></td> 
								      <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><span  ><?php echo $cal_four ;?></td> 
								   <td colspan="1" rowspan="1" style="width:70px" tabindex="0" class="alert alert-warning"><span  ><?php echo $cal_five ;?></td> 
								
											</tr>	   
									 <?php 
								     
									 }?>
									  
                                
                           
                                </tbody>
                            </table>
			
							</div>
                      
     
	 </main>
	 
	 
	 
	 
	 

					<div class="col-md-5">
								
			<div class="span" id="samino">
			
			      <div id="zebib">
					
                 
                            <table cellpadding="1" cellspacing="1" border="2" class="table  table-bordered"  id="example" >
                                <div class="alert btn-primary">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php

                        $sql="SELECT * FROM grade_job_title  where id = '".$job_title."'";
                        $sammm=mysql_query($sql);
     ?>
                                    <strong ><i class="icon-role icon-large" style="color:white">Calculated Salary For Salary-Grade <span class="badge"><?php echo $job_Grade; ?></span> and Job Title: &nbsp;<span class="" ><mark><?php $row_job=mysql_fetch_array($sammm);echo $row_job[2]  ?></span ></mark></i></strong>
                                </div>
                                <thead>
                                    <tr>
									       <th>Grade</th>
									     <th>Basic Salary</th>
                                        <th> 0.1</th>                                 
                                        <th> 0.2</th>   
										<th>0.4</th> 
									    <th>0.5</th> 
										<th>0.6</th>
                                        <th>Employee%</th> 	
										<th>Monthly Budget</th> 
										<th>Annual Budget</th> 
                                     
									
                                    </tr>
                                </thead>
                                <tbody>
								 
                <?php $role_query=mysql_query("select * from  salary  where Grade='$job_Grade' ")or die(mysql_error());
								        
									while($row=mysql_fetch_array($role_query))
								
									{  
								 $ca=$row[1]*$parametric;
									   $ca_two=intval($ca*$parametric);
									   $ca_three=intval($ca_two*$parametric);
									   $ca_four= intval($ca_three*$parametric);
									   $ca_five=intval ($ca_four*$parametric);
									   
								?>	 <tr>
								    <td><?php $sam=$row[4];echo $row[4]; ?></td> 
								     <td><?php echo $row[0]; ?></td> 
								     <td><?php echo $ca; ?></td> 
					    		   	 <td><?php echo $ca_two; ?></td> 
									 <td><?php echo $ca_three; ?></td> 
								     <td><?php echo $ca_four ;?></td> 
								     <td><?php echo $ca_five ;?></td> 
					    			<td><?php echo "x%" ?></td>		 
		         		   	   <td><?php echo "--" ?></td>	
							   <td><?php echo "--" ?></td>
											</tr>	   
									 <?php }?>
									  
                                
                           
                                </tbody>
                            </table>
			</div></div>
							<br>
 <div    class="container">   
			   
			   <form action="function.php" method="POST">
			     <div class="pull-left">
					 <input  class='alert btn-danger' type="button" onClick="printDi('samino')" value="Print/Pdf" />
					 <input type="hidden"  name="sam" value="<?php $sam=$row[4];echo $sam; ?>" />
					 <input  type="submit" name="Export_single"  class='alert btn-primary'  value="Excel" />
					  <input  type="submit" name="rtf"  class='alert btn-primary'  value="RTF(Ritch Text Format)" />
					 
		         </div>                                                                                
                                </form>   
							
								</div>
       </div>
							</div>
						</div>
					</div>
					
					
				</div> <!-- .testimonial-section -->
   <?php }?>
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title"></h2>
						<div class="row">
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
									<div class="map"></div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												<strong>Steclezion Creator & Developer </strong>
												RCC/ADIHALO
                                                
											</div>
										
										</div>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->
		<?php include("footer.php");  ?>
		

		<script src="js/jquery-1.11.1.min.js"></script>	
		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>-->
		
