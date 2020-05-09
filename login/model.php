<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head>
	<link href="themes/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
</head>
<body>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Vehicle Model / Manufacturer</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">View / Edit / Delete - Vehicle Manufacturer & Model </h2>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-6">
				<div class="panel panel-default">
					<div class="panel-heading">Vehicle Manufacturer</div>
					<div class="panel-body">
					<div id="manufacturerTableContainer" ></div>
				    </div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="panel panel-default">
					<div class="panel-heading">Vehicle Model</div>
					<div class="panel-body">
						<div id="modelTableContainer" ></div>
				    </div>
				</div>
			</div>
			
		</div><!--/.row-->
		
		</div><!--/.col-->
</body>

</html>