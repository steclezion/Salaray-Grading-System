
<?php include("header.php");
       include("dbcon.php");
	   include("session.php");
 ?>

	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">



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
						<table>
						<tr>
						<td>
						 <div class="pull-left">	<div class="alert badge-inverse"><strong style="color:white">
						  
						<div class="row">
								
							
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
		  
		<option style="color:BLACK"value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </option>
	               
					    
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
				<option value="0 TO 3">0-3(Basic -Salary)</option>
				<option value="4 TO 7">4-7</option>
				<option value="8 TO 12">8-12</option>
				<option value="13 TO 17">13-17</option>
				<option value="18 TO 22">18-22</option>
				<option value="Exceptional">>22[Exceptional]</option>
				</select>
				</div> 
			   </div>
    
			
				
				
				
	<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Calculate</button>
				</div>
			</div>




		</div>
	
      </div>
   </form>
 
   </strong></div></div>
						 </td>
						 <td>
						 
						
						
<?php 
if (isset($_POST['submit']) && $_POST['Year'] != 'Exceptional' )
   {   

	//Fetch the data from the grade_job_title table selected job 
  $job_title =$_POST['level_three_job_title'];
  $Grade=$_POST['education'];
  $job_title_query=mysql_query("SELECT * FROM grade_job_title where id='".$job_title."'");
  $job_title_query_fetch=mysql_fetch_array($job_title_query);
  $selected_job_title=$job_title_query_fetch[2];
//Fetch the data from the grade_job_title table to determine the */
  $selected_job_grade=$job_title_query_fetch["$Grade"];
  //Year studied
  $YEAR=$_POST['Year'];
  //EDUCATIONAL level
   $Grade=$_POST['education'];
   
   //fetch salary uses to attain the value of the salary from the grade point of view
 $salary_query=mysql_query("SELECT * FROM salary where Grade='".$selected_job_grade."' ");
  $salary_fetch=mysql_fetch_array($salary_query);
   //calculate the salary based on the year of expierance and educations
 $parametric =mysql_query("select * from paramaters  where Exception !='Active'");
	$parametric_fetch=mysql_fetch_array($parametric);
    $paramaters=$parametric_fetch[0];
	//Check whether the posted data 
	$i=0;
	$salary=$salary_fetch[0] ;
$Me=$salary_fetch[0] ;
	 
	if($YEAR == '0 TO 3'){$loop=0; } 
	elseif($YEAR == '4 TO 7'){$loop=1;}
	elseif($YEAR == '8 TO 12'){$loop=2;}
	elseif($YEAR == '13 TO 17'){$loop=3;}
    elseif($YEAR == '18 TO 22'){$loop=4;}
	  elseif($YEAR == '18 TO 22'){$loop=4;}
	for($i=0;$i <  $loop;$i++){
		$salary=($salary * $paramaters);
                              }
	$final_salary = ($salary);
   
   ?>
<div class="container">
 
  <h2>Calculated Salary</h2>

 <a data-toggle="collapse" class="alert badge-success" data-parent="#accordion" style="color:White">From Basic Salary</a>
		    :   <a data-toggle="collapse" class="alert badge-info"  data-parent="#accordion" href="#collap" style="color:White"><?PHP ECHO $Me; ?></a>
        </h4>

  <br/>  <br/> 

  <br/>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
	  
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >SELECTED JOB TITLE</a>
		    :   <a data-toggle="collapse" class="alert btn-primary"  data-parent="#accordion" href="#collapse1"><?PHP ECHO $selected_job_title; ?></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body" style="color:white">
		<p ><mark><?PHP ECHO $selected_job_title; ?></mark></p>
        <p>This is Your selected Job Title</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion">YEAR OF EXPERINCE</a>
		    :   <a data-toggle="collapse"  class="alert btn-primary" data-parent="#accordion" href="#collapse2"><?php print $YEAR; ?></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
  <div class="panel-body" style="color:white">
		<p ><mark><?php print $YEAR; ?></mark></p>
        <p>This is Your selected YEAR OF EXPERINCE</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >EDUCATIONAL LEVEL</a>
		    :   <a data-toggle="collapse"  class="alert btn-primary" data-parent="#accordion" href="#collapse3"><?php echo $Grade; ?></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body" style="color:white">
		<p ><mark><?php echo $Grade; ?></mark></p>
        <p>This is Your selected EDUCATIONAL LEVEL</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >CALCULATED SALARY</a>
		    :   <a data-toggle="collapse"  class="alert alert-info" data-parent="#accordion" href="#collapse4"><?php echo $final_salary;?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" href="#collapse4"> Job Grade</a>
		    :   <a data-toggle="collapse"   class="alert alert-info" data-parent="#accordion" href="#collapse5"><?PHP ECHO $selected_job_grade; ?></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse ">
    
	<div class="panel-body" style="color:white">
		<p ><mark><?php echo $final_salary;?></mark></p>
        <p>Your Calculated SALARY</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
		
      </div>
	    <div id="collapse5" class="panel-collapse collapse ">
    
	<div class="panel-body" style="color:white">
		<p ><mark><?PHP ECHO $selected_job_grade; ?></mark></p>
       <p>This is Your selected Grade</p>
	   <p> This is an internal operation work!!For better understanding Assisst your Close Chief PLEAZE!! </p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
		
      </div>
      </div>
    </div>
  </div> 
   <?php     }
   
   elseif(isset($_POST['Year'] )== 'Exceptional')
   {  
   //Fetch the data from the grade_job_title table selected job 
  $job_title =$_POST['level_three_job_title'];
  $Grade=$_POST['education'];
  $job_title_query=mysql_query("SELECT * FROM grade_job_title where id='".$job_title."'");
  $job_title_query_fetch=mysql_fetch_array($job_title_query);
  $selected_job_title=$job_title_query_fetch[2];
//Fetch the data from the grade_job_title table to determine the */
  $selected_job_grade=$job_title_query_fetch["$Grade"];
  //Year studied
  $YEAR=$_POST['Year'];
  //EDUCATIONAL level
   $Grade=$_POST['education'];
   
   //fetch salary uses to attain the value of the salary from the grade point of view
 $salary_query=mysql_query("SELECT * FROM salary where Grade='".$selected_job_grade."' ");
  $salary_fetch=mysql_fetch_array($salary_query);
   //calculate the salary based on the year of expierance and educations
 $parametric =mysql_query("select * from paramaters  where Exception !='Active'");
	$parametric_fetch=mysql_fetch_array($parametric);
    $paramaters=$parametric_fetch[0];
	//Check whether the posted data 
	$i=0;
	$salary=$salary_fetch[0] ;
	$Me=$salary_fetch[0] ;
 $loop= 4;
       $param =mysql_query("select * from paramaters  where Exception ='Active'");
	   $paramet=mysql_fetch_array($param);
       $pa=$paramet[0];
	   for($i=0;$i <  $loop;$i++){
		$salary=($salary * $paramaters);
                              }
	$final_salary = ($salary *$pa);
   
   ?>
 <div class="pull-right">  
<div class="container">

  <h2>Calculated Salary</h2>

 <a data-toggle="collapse" class="alert badge-success" data-parent="#accordion" >From Basic Salary</a>
		    :   <a data-toggle="collapse" class="alert badge-info"  data-parent="#accordion" href="#collap"><?PHP ECHO $Me; ?></a>
        </h4>

  <br/>  <br/>  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >SELECTED JOB TITLE</a>
		    :   <a data-toggle="collapse" class="alert btn-primary"  data-parent="#accordion" href="#collapse1"><?PHP ECHO $selected_job_title; ?></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in ">
        <div class="panel-body" style="color:white">
		<p ><mark><?PHP ECHO $selected_job_title; ?></mark></p>
        <p>This is Your selected Job Title</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion">YEAR OF EXPERINCE</a>
		    :   <a data-toggle="collapse"  class="alert btn-primary" data-parent="#accordion" href="#collapse2"><?php print $YEAR; ?></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
  <div class="panel-body" style="color:white">
		<p ><mark><?php print $YEAR; ?></mark></p>
        <p>This is Your selected YEAR OF EXPERINCE</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >EDUCATIONAL LEVEL</a>
		    :   <a data-toggle="collapse"  class="alert btn-primary" data-parent="#accordion" href="#collapse3"><?php echo $Grade; ?></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body" style="color:white">
		<p ><mark><?php echo $Grade; ?></mark></p>
        <p>This is Your selected EDUCATIONAL LEVEL</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" >CALCULATED SALARY</a>
		    :   <a data-toggle="collapse"  class="alert alert-info" data-parent="#accordion" href="#collapse4"><?php echo $final_salary;?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <a data-toggle="collapse" class="alert btn-inverse" data-parent="#accordion" href="#collapse4">Job Grade</a>
		    :   <a data-toggle="collapse"   class="alert alert-info" data-parent="#accordion" href="#collapse5"><?PHP ECHO $selected_job_grade; ?></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse ">
    
	<div class="panel-body" style="color:white">
		<p ><mark><?php echo $final_salary;?></mark></p>
        <p>Your Calculated SALARY</p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
		
      </div>
	    <div id="collapse5" class="panel-collapse collapse ">
    
	<div class="panel-body" style="color:white">
		<p ><mark><?PHP ECHO $selected_job_grade; ?></mark></p>
       <p>This is Your selected  Job Grade</p>
	   <p> This is an internal operation work!!For better understanding Assisst your Close Chief PLEAZE!! </p>
        <p> if you made any mistake in selection the calculation may not be accurate to the type of result you are looking For!! </p>
		</div>
		
      </div>
      </div>
    </div>
  </div> 
	   
	   
	   
	   
	   
	   
	   
	<?php   
	   
   }
	   
   
   ?> </strong></div></div>
   </td>
   </tr>
   </table>
						 <br/><br/><br/></br/>
						
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
		
