<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN LOGIN</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="loginpage">
		<div class="mar">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">Log in as Admin</div>
							<div class="panel-body">
								<form role="form" method="post">
									<fieldset>
										<div class="form-group">
											<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="password" type="password" required>
										</div>
										<button class="btn btn-link" type="button" onclick="window.location = '../index.php';">Cancel</button>
										<button class="btn btn-success" type="submit" name="btn-login">Log In</button>
									</fieldset>
								</form>
							</div>
                        </div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->	
		</div>
	</div>	
</body>

</html>