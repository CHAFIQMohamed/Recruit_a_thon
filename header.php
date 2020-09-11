<?php session_start(); ?>
<?php
  if(isset($_SESSION['uid'])){
    $data="logout";
    }
  else
  {
  	$data="login";
    
  }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Technocrat | Job Recruiting Portal</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/icons/icon.jpg" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
 
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="index.php" class="site-logo">
							<img src="img/icons/logo.jpg" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on technocrat ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<?php
								if ($data=='logout') {
                                    echo "<a href='logout.php'>Sign Out</a>&nbsp;&nbsp;";
                                }else{
                                   echo "<a href='login.php'>Sign In</a>/<a href='register.php'>Sign Up  </a>";
                                } 
                                ?>
								
								
								<a class="site-btn" href="post_check.php" style="color: white">Post An Add</a>
                              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="job.php">Jobs</a></li>
					<li><a href="resume_view.php">Resume's</a></li>
					<li><a href="resume_builder.php">Resume Builder<span class="new">New</span></a></li>
					<li><a href="data.php">Job Statistics</a></li>
					<li><a href="#">My Account</a>
						<ul class="sub-menu">
							<li><a href="dashboard_check.php">Dashboard</a></li>
							<li><a href="profile.php">Profile</a></li>
						</ul>
					</li>
					
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</nav>
	</header>