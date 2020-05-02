<?php
 ob_start();
 session_start();
 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $cf_name = trim($_POST['fname']);
  $cf_name = strip_tags($cf_name);
  $cf_name = htmlspecialchars($cf_name);

  $cl_name = trim($_POST['lname']);
  $cl_name = strip_tags($cl_name);
  $cl_name = htmlspecialchars($cl_name);
  
  $c_email = trim($_POST['email']);
  $c_email = strip_tags($c_email);
  $c_email = htmlspecialchars($c_email);
  
  $c_pass = trim($_POST['pass']);
  $c_pass = strip_tags($c_pass);
  $c_pass = htmlspecialchars($c_pass);
  
  // basic name validation
  if (empty($cf_name)) {
   $error = true;
   $nameError = "Please enter your first names.";
  } else if (empty($cl_name)) {
  $error = true;
   $nameError = "Please enter your last names.";
  } else if (strlen($cf_name) < 3 && strlen($cl_name) < 3) {
   $error = true;
   $nameError = "Names must have atleat 3 characters.";
  } else if (!(preg_match("/^[a-zA-Z ]+$/",$cf_name)&&preg_match("/^[a-zA-Z ]+$/",$cl_name))) {
   $error = true;
   $nameError = "First and Last name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($c_email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT `c_email` FROM customers WHERE c_email = '$c_email'";
   
   $result = mysql_query($query);
   $count = mysql_num_rows($result);

   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($c_pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($c_pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using md5();
  $password = md5($c_pass);
  
  // if there's no error, continue to signup
  if( !$error ) 
  {  
   $query = "INSERT INTO `customers` (`cf_name`, `cl_name`, `c_email`, `c_pass`) VALUES ('$cf_name', '$cl_name', '$c_email','$c_pass')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($cf_name);
    unset($cl_name);
    unset($c_email);
    unset($c_pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
  }  
 }
?>
