<?php include 'links.php'?>
<?php include 'header.php'?>
	<body>
<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/c1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="text-center"><span style="color: white ; text-transform: uppercase;font-size: 50px">The most powerful cars around the world</span></h2>
                                    <p class="animation animated-item-2"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/c2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="text-center"><span style="color: white ; text-transform: uppercase;font-size: 50px">Remarkable and Achievable Cars of Paradise</span></h2>
                                    <p class="animation animated-item-2"> </p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/slides/c3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="text-center"><span style="color: #aec62c ; text-transform: uppercase;font-size: 50px">Works Seamlessly Well in All Seasons</span> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"><img src="img/guide/left.png" alt=""></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"><img src="img/guide/right.png" alt=""></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Welcome to <span style="color:#aec62c; text-transform:font-size:24px;">MyGarage</span>To start shopping first you should </h3> <button onclick="document.getElementById('id001').style.display='block'" style="width:auto;">Sign Up</button>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->
    <!--  for sign up -->
    <div>
    <div id="id001" class="modal">
      <div class="modal-dialog">
      <form class="modal-content animate" action="customer/registration.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id001').style.display='none'" class="close" title="Close Modal">&times;</span>
          <H3 align="center">Sign up</H3>
        </div>
        <div class="container">
        <div class="col-sm-4" > 
          <div class="form-group">
              <label for="fname">Firstname</label>
              <input type="text" class="form-control" name="fname" placeholder="Firstname..." id="fname">
        
              <label for="lname">Lastname</label>
              <input type="text" class="form-control" name="lname" placeholder="Lastname..." id="lname">
         
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email..." id="email">
        
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pass" placeholder="Password..." id="pwd">
     
        <label for="cpwd"> Confirm Password:</label>
        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password..." id="cpwd">
      </div>
          <input type="checkbox" checked="checked"> Remember me
          

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id001').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="btn-signup">Sign Up</button>
          </div>  

          </div>
        </div>
      </form>
     </div>
    </div>
    </div>
    <!-- end sign up -->

    <script>
    // Get the modal
    var modal = document.getElementById('id001');
    var modal1=document.getElementById('id002');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == modal1) {
            modal.style.display = "none";
        }
    }
    </script>
		<!-- Services -->
        <!-- Services -->
      <div class="section section-white">
      	<div class="container">
      		<div class="row-4">
      			<div class="section-title">
      				<h1><span style="color: #aec62c; text-transform:uppercase; font-size:50px;">Brands</span></h1>
      			</div>
      			<ul class="manufacture_logos">
      				<div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/acura_96x96.png" alt="acura" width="24" height="24">
      					</figure>
      				</div>
      				<div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/audi_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/bmw_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/buick_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/cadillac_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/chevrolet_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/chrysler_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/dodge_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/fiat_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/land-rover_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/lexus_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/lincoln_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/maserati_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/mercedes-benz_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/mitsubishi_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/nissan_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/ford_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/gmc_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/genesis_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/honda_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/hyundai_96x96.png" width="24" height="24">
      					</figure>
      				</div>
      				<div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/infiniti_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/jaguar_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/jeep_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/kia_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/porsche_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/ram_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/scion_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/subaru_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/toyota_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/volkswagen_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/volvo_96x96.png" width="24" height="24">
      					</figure>
      				</div><div class="col-md-4 col-sm-6">
      					<figure>
      						<img src="img/portfolio/smart_96x96.png" width="24" height="24">
      					</figure>
      				</div>
      			</ul>
      		</div>
      	</div>
      </div>
<hr>
		<!-- Latest Cars -->	
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Our Recent Cars</h1>
				</div>
			<ul class="grid cs-style-3">
            <div class="col-md-4 col-sm-6">
    					<figure>
    						<img src="login/uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" height ="200" width="400" >
    						<figcaption>
    							<h3><?php echo $Row['model_name']; ?></h3>
    							<span class="actual"><h5><i><strong>Starting MRP $<?php echo $Row['s_price']; ?></strong></i></h5></span>
    							<a href="portfolio-item.php">Take a look</a>
    						</figcaption>
    					</figure>
	        	</div>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Latest Cars -->
<hr>
		<!-- Manufacturer -->
	    <div class="section">
	    	<div class="container">
				<div class="section-title">
				<h1>Manufacturers</h1>
				</div>
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo1.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo2.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo3.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo4.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo5.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo6.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo7.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo8.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo9.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo10.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo11.jpg" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo12.jpg" alt="Client Name"></a></div>
				</div>
			</div>
	    </div>
	    <!-- Manufacturers -->
	   	 <!-- Footer -->
		<?php include 'footer.php'?>
    </body>
</html>