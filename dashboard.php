<?php
   include('session.php');
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
    <h3>Welcome <?php echo $login_session; ?></h3>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#" style="margin:10px;font-size:30px;color:rgb(247,147,28);font-weight:bold;font-family:Aldrich, sans-serif;font-style:oblique;">OverPowered</a><a href="index.html" data-bs-hover-animate="swing" style="margin:10px;">Home </a>
                    <a
                        class="text-white" href="dashboard.php" data-aos="slide-down" data-aos-once="true" style="margin:10px;">Dashboard</a><a href="#" style="margin:10px;">Data</a><a href="logout.php" style="margin:10px;">Logout</a><a href="#" style="margin:10px;"></a></li>
                <li> <a href="#"></a></li>
                <li> </li>
                <li> </li>
            </ul>
        </div>
        <div class="page-content-wrapper"></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
</body>

</html>