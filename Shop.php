
<?php
include_once 'login/dbconnect.php';
$res=mysql_query("SELECT * FROM vehicle");
?>
<?php include 'links.php';?>
<?php  include 'header.php'; ?>
        
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>All Vehicles</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
        <?php
				while ($Row = mysql_fetch_assoc($res)) { ?>
	    	<div class="container">
	    	
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="img-taumbnail">
						<img src="login/uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" width="400" height="260">
						</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			
	    			<div class="col-sm-6 product-details">
	    				<h2><i>Make:<?php echo $Row['manufacturer_name']; ?><i></h2>
						<h3>Vehicle Details</h3>
	    				<p><h4><i>Model:<?php echo $Row['model_name']; ?><i></h4></p>
	    				<p> Category:  <?php echo $Row['category']; ?> </p>		
	    				<p> Price: $  <?php echo $Row['s_price']; ?></p>		
	    				<p> Color:  <?php echo $Row['v_color']; ?> </p>
						<p> Status:   <?php echo $Row['status']; ?> </p>
						<p> Mileage/hr(km):   <?php echo $Row['mileage']; ?></p>
						<p> Registration-year:  <?php echo $Row['registration_year']; ?> </p>
						<p>Gear Type:   <?php echo $Row['gear']; ?></p>
						<p> Doors:  <?php echo $Row['doors']; ?> </p>
						<p>Seats:   <?php echo $Row['seats']; ?><p>
						<p> Tanks Capacity :  <?php echo $Row['tank']; ?> Litters</p>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
	    		</div>
			</div>
			<hr>
			<?php } ?>
		</div>
		
<hr>
		<?php  include 'footer.php'; ?>

	</body>
</html>
	