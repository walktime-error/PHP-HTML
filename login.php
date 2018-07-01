<?php
	include("config.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
	    //username and password sent from form

	    $myusername = mysqli_real_escape_string($db,$_POST['email']);
	    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

	    $password = md5($mypassword);
	    $sql = "SELECT EmployeeID FROM Employee WHERE Email = '$myusername' and `Password` = '$password'";
	    $result = mysqli_query($db,$sql);
   	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $active = $row['active'];

	    $count = mysqli_num_rows($result);

	    //if result matched $myusername and $mypassword, table row must be 1 row

	    if($count == 1) {
		//session_register("myusername");
		$_SESSION['login_user'] = $myusername;

	        header("location: dashboard.php");
	    } else {
		$error = "Your Login Name or Password is invalid";
	    }
	}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> 
			
	<a href="login.php" style="margin:10px;font-size:30px;color:rgb(247,147,28);font-weight:bold;font-family:Aldrich, sans-serif;font-style:oblique;margin-	right:5px;margin-left:5px;">OverPowered</a><a class="text-white" href="login.php" data-bs-hover-animate="swing"
                        style="margin:10px;">Home </a>
	<a href="dashboard.php" data-aos="slide-down" data-aos-	once="true" style="margin:10px;">Dashboard</a><a href="#" 	style="margin:10px;">Data</a>
	<a href="#" style="margin:10px;">Logout</a><a href="#" 	style="margin:10px;"></a></li>
     
           <li>
                <a href="#"></a></li>
                <li> </li>
                <li> </li>
            </ul>
	 </div> 
 	 <div class="page-content-wrapper"></div>
    </div>
    
	<div class="login-clean">
		<form action = "" method="post" 		enctype="application/x-www-form-urlencoded" class="float-	none flex-grow-0 flex-fill justify-content-center align-	items-center align-content-around align-self-center" 	id="form" style="margin:0px 550px;background-color:	#f1f7fc;padding-right:40px;">

    		<h2 class="sr-only">Login Form</h2>

     <div class="justify-content-center align-content-center illustration"><i class="icon ion-ios-lightbulb" style="background-color:rgba(255,255,255,0.2);color:rgb(247,147,28);"></i>
	</div>
   
     <div class="form-group">
        <input id="email" type="Email" name="email" required placeholder="Email" autofocus class="form-control"/>
        <input class="form-control" type="password" name="password" required placeholder="Password" id="password" /> 
        
        <button class="btn btn-primary btn-block" type="submit" style="  background-color:rgb(247,147,28);
">Log In</button>
	<a class="btn btn-primary btn-block" href="register.php" style="  background-color:rgb(247,147,28);
">Register</a>
	-<a href="#" class="forgot">Forgot your email or password?</a>
    </div> 
    </form>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>


	    