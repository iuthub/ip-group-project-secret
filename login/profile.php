
<!DOCTYPE html>
<html>
<body>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Profile View</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View / Edit Profile</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">View / Edit Profile</div>
					<div class="panel-body">
					<form method="post">
						<fieldset>
							<div class="form-group">
								Email : <input class="form-control" placeholder="E-mail" name="u_email" type="email" value="<?php echo $userRow['u_email']; ?>" disabled>
							</div>
							<div class="form-group">
								Password : <input class="form-control" placeholder="Password" name="u_pass" type="password" required>
							</div>
							<div class="form-group">
								First Name : <input class="form-control" placeholder="First Name" name="f_name" type="text" value="<?php echo $userRow['f_name']; ?>" required>
							</div>
							<div class="form-group">
								Last Name : <input class="form-control" placeholder="Last Name" name="l_name" type="text" value="<?php echo $userRow['l_name']; ?>" required>
							</div>
							<div class="form-group">
								Mobile : <input class="form-control" placeholder="Mobile" name="u_mobile" type="text" value="<?php echo $userRow['u_mobile']; ?>" required>
							</div>
							<div class="form-group">
								Position : <input class="form-control" placeholder="Position" name="u_position" type="text" value="<?php echo $userRow['u_position']; ?>" required>
							</div>
							<div class="form-group">
								Gender : <?php
   
										   if(strcmp("Male",$userRow['u_gender'])==0) 
											echo '<input type="radio" name="u_gender" value="Male" checked> Male';
										   else 
											echo '<input type="radio" name="u_gender" value="Male"> Male';
										   if(strcmp("Female",$userRow['u_gender'])==0) 
											echo ' &nbsp<input type="radio" name="u_gender" value="Female" checked> Female';
										   else 
											echo '&nbsp <input type="radio" name="u_gender" value="Female"> Female'; 
										  ?>			
							</div>
							<div class="form-group">
								Date of Birth:<input type="date"  value="<?php echo $userRow['u_bday']; ?>" name="u_bday">
							  
							</div>
							<div class="form-group">
								Address: <textarea rows="3" cols="10" class="form-control"  name="u_address"><?php echo $userRow['u_address']; ?></textarea>
							</div>
							<div class="form-group">
								Security Question : <input class="form-control" placeholder="Security Question" name="s_question" type="text" value="<?php echo $userRow['s_question']; ?>" required>
							</div>
							<div class="form-group">
								Answear: <input class="form-control" placeholder="Answear" name="s_ans" type="text" value="<?php echo $userRow['s_ans']; ?>" required>
							</div>
							<div class="form-group">
								 <?php   
												 if(strcmp("Admin",$userRow['u_type'])==0) {
												 echo 'User Type ';
										   if(strcmp("Admin",$userRow['u_type'])==0) 
											echo '<input type="radio" name="u_type" value="Admin" checked> Admin';
										   else 
											echo '<input type="radio" name="u_type" value="Admin"> Admin';
										   if(strcmp("Female",$userRow['u_type'])==0) 
											echo ' &nbsp<input type="radio" name="u_type" value="Employee" checked> Employee';
										   else 
											echo '&nbsp <input type="radio" name="u_type" value="Employee"> Employee'; 
											}
								?>
								
							</div>
							
							<button type="submit" name="update">Update</button>
							
						</fieldset>
					</form>
				</div>
				</div>
			</div>
		</div><!--/.row-->
		
		</div><!--/.row-->

</body>
</html>