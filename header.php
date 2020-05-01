<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="index.php">MyGarage</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Client Login</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li> 
                </ul>
            </div>
        </div>
        </div>

<!-- popup -->
<div>
 <!--  for Log In -->
<div id="id002" class="modal">
  <div class="modal-dialog">
    <div class="container">
    <div class="col-sm-4" > 
      <div class="form-group">   
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email..." id="email">
          <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password..." id="pwd">
      </div>
      <input type="checkbox" checked="checked"> Remember me
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id002').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" >Log In</button>
      </div>
    </div>
    </div> 
  </form>
  </div>
</div>
<!-- end Log In-->

</div>
</header>
</head>