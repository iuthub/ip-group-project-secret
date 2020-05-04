<!DOCTYPE html>
<html>
<head>
<style>
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
</style>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Manage Users</li>
			</ol>
		</div>		
		<div class="row">
			<div class="col-lg-5 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add New Admin</div>
					<div class="panel-body">
					<form method="post">
						<fieldset>
							<div class="form-group">
								Email : <input class="form-control" placeholder="E-mail" name="u_email" id="username" type="email" onBlur="checkAvailability()" required><span id="user-availability-status"></span> 
							</div>
							<div class="form-group">
								Password : <input class="form-control" placeholder="Password" name="u_pass" type="password" required>
							</div>
							<div class="form-group">
								First Name : <input class="form-control" placeholder="First Name" name="f_name" type="text"  required>
							</div>
							<div class="form-group">
								Last Name : <input class="form-control" placeholder="Last Name" name="l_name" type="text" required>
							</div>
							<div class="form-group">
								Mobile : <input class="form-control" placeholder="Mobile" name="u_mobile" type="number"  required>
							</div>
							<div class="form-group">
								Position : <input class="form-control" placeholder="Position" name="u_position" type="text" required>
							</div>
							<div class="form-group">
								Gender : <input type="radio" name="u_gender" value="Male"> Male
										 <input type="radio" name="u_gender" value="Female"> Female
											
							</div>
							<div class="form-group">
								Date of Birth:<input type="date" name="u_bday">
							</div>
							<div class="form-group">
								Address: <textarea rows="3" cols="10" class="form-control"  name="u_address"></textarea>
							</div>
							<div class="form-group">
								Security Question : 
									<select class="form-control" placeholder="Security Question" name="s_question">
										  <option value="What is your 1st Phone No?">What is your 1st Phone No?</option>
										  <option value="Who is your 1st teacher?">Who is your 1st teacher?</option>
										  <option value="Who do you prise?">Who do you prise?</option>
									</select>
							</div>
							<div class="form-group">
								Answer: <input class="form-control" placeholder="Answear" name="s_ans" type="text" required>
							</div>
							<div class="form-group">
								User Type: 
										   <input type="radio" name="u_type" value="Admin"> Admin
										   <input type="radio" name="u_type" value="Employee"> Employee 								
							</div>
							<button type="submit" name="update">Submit</button>
						</fieldset>
					</form>
				</div>
				</div>
			</div>			
			<div class="col-lg-7 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">All Admins - You can't delete these deafult admins</div>
					<div class="panel-body">
					<div id="userTableContainer" ></div>
				    </div>
				</div>
			</div>
		</div><!--/.row-->
		</div><!--/.row-->	
</body>
</html>
