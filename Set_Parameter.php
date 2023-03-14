<?php  include("header.php");
       include("dbcon.php");
	   include("session.php");
       include("navbar_dashboard_set_parameter.php");
       include("config.php");
?>

			<link rel="shortcut icon" href="dummy/logo.png ">	
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
					<body data-ng-app="postModule" data-ng-controller="PostController" data-ng-init="init()">
	<input type="hidden" id="base_path" value="<?php echo BASE_PATH; ?>"/>
	

	<div class="container">

		<div class="clearfix"></div>
		<h2 class="wells sm-wells" style="color:YELLOW"> SET Parametric Valaue</h2>

		<div class="row mt80">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 animated fadeInDown">
				<div class="alert alert-danger text-center alert-failure-div" role="alert" style="display: none">
					<p></p>
				</div>
				<div class="alert alert-success text-center alert-success-div" role="alert" style="display: none">
					<p></p>
				</div>
				<form novalidate name="userForm" >
					<div class="form-group">
		<label for="exampleInputEmail1">Parametric Factor</label> 
						<input data-ng-minlength="3" required type="text" class="form-control" id="name" name="name" placeholder="Parameter" data-ng-model='tempUser.name'>
	<span class="help-block error" data-ng-show="userForm.name.$invalid && userForm.name.$dirty">
							{{getError(userForm.name.$error, 'name')}}
						</span>
					</div>
				
					
					
					<!-- <input type="hidden" data-ng-model='tempUser.id'>  -->
					<div class="text-center">
						<button ng-disabled="userForm.$invalid" data-loading-text="Saving User..." ng-hide="tempUser.id" type="submit" class="btn btn-save" data-ng-click="addUser()">Save User</button>
						<button ng-disabled="userForm.$invalid" data-loading-text="Updating User..." ng-hide="!tempUser.id" type="submit" class="btn btn-save" data-ng-click="updateUser()">Update User</button>
					</div>
					
				</form>
			</div>

			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated fadeInUp">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped"  id="example">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="20%">Parametric Factor</th>
								<th width="20%">Changed Date</th>
							   <th width="20%">Exception>22</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr data-ng-repeat="user in post.users | orderBy : 'id'">
								<th scope="row">{{user.id}}</th>
								<td> {{user.Change_Factor}} </td>
							
								<td> {{user.Time_Stamp}} </td>
								<td> {{user.Exception}} </td>
								<td> <span data-ng-click="editUser(user)"> Edit</span> | <span data-ng-click="deleteUser(user)">Delete</span> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js_js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js_js/bootstrap.min.js"></script>
	<script src="js_js/angular.min.js"></script>
	<script src="js_js/angular-custom.js"></script>
</body>

						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->
			<br><br/><br/><br/><br/>
			<?php include("footer.php   ");  ?>

		</div> <!-- #site-content -->

		
		
	</body>
	

	<link href="css_css/font-awesome.min.css" rel="stylesheet">
	<link href="css_css/animate.min.css" rel="stylesheet">

	
	
</html>