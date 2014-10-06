<?php include "connection.php"; include "timeout.php";?>
<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>Dashboard | Stanmeter</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
		<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="assets/img/house.ico"/>

		<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
		<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
		<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
		<script src="assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
		<script src="assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
		<script src="assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="assets/scripts/core/app.js" type="text/javascript"></script>
		<script src="assets/scripts/custom/index.js" type="text/javascript"></script>
		<script src="assets/scripts/custom/tasks.js" type="text/javascript"></script>
		<script src="assets/scripts/custom/coin-slider.js" type="text/javascript"></script>
		<script src="assets/scripts/custom/coin-slider.min.js" type="text/javascript"></script>

		<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		});
		</script>

		<script type="text/javascript">
	        $(document).ready(function () {
	            $('#coin-slider').coinslider({ 
	                width: 1025,
	                height: 352,
	                spw: 7, // squares per width
	                sph: 5, // squares per height
	                delay: 3000, // delay between images in ms
	                sDelay: 30, // delay beetwen squares in ms
	                opacity: 0.7, // opacity of title and navigation
	                titleSpeed: 500, // speed of title appereance in ms
	                effect: '', // random, swirl, rain, straight
	                navigation: false, // prev next and buttons
	                links : false, // show images as links 
	                hoverPause: true // pause on hover
	            });
	        });
	    </script>
	</head>
	<body class="page-header-fixed page-sidebar-fixed">
		<div class="header navbar navbar-fixed-top">
			<div class="header-inner">
				<a class="nav navbar-nav pull-left" href="index.php" style="padding-left:15px; padding-top:4px">
					<img src="assets/img/logo-perumahan.png" alt="logo" class="img-responsive"/>
				</a>
				<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<img src="assets/img/menu-toggler.png" alt=""/>
				</a>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" src="assets/img/admin-icon.png"/>
							<span class="username">
								<?php echo $_SESSION['username'];?>
							</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="profile.php">
									<i class="fa fa-key"></i> Change Password
								</a>
							</li>
							<li>
								<a href="javascript:;" id="trigger_fullscreen">
									<i class="fa fa-arrows"></i> Full Screen
								</a>
							</li>
							<li>
								<a href="logout.php">
									<i class="fa fa-key"></i> Log Out
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="clearfix">
			<div class="page-container">
				<div class="page-sidebar-wrapper">
					<div class="page-sidebar navbar-collapse collapse">
						<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
							<li class="start active ">
								<a href="index.php">
									<i class="fa fa-home"></i>
									<span class="title">
										Dashboard
									</span>
									<span class="selected">
									</span>
								</a>
							</li>
							<li>
								<a href="searching.php">
									<i class="fa fa-search"></i>
									<span class="title">
										Searching
									</span>
									<span class="selected">
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="page-content-wrapper">
					<div class="page-content">
						<div class="theme-panel hidden-xs hidden-sm">
							<div class="toggler">
							</div>
							<div class="toggler-close">
							</div>
							<div class="theme-options">
								<div class="theme-option theme-colors clearfix">
									<span>
										 THEME COLOR
									</span>
									<ul>
										<li class="color-black current color-default" data-style="default">
										</li>
										<li class="color-blue" data-style="blue">
										</li>
										<li class="color-brown" data-style="brown">
										</li>
										<li class="color-purple" data-style="purple">
										</li>
										<li class="color-grey" data-style="grey">
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h3 class="page-title">
								Dashboard <small>Welcome to Stanmeter Monitoring PLN</small>
								</h3>
								<ul class="page-breadcrumb breadcrumb">
									<li>
										<i class="fa fa-home"></i>
										<a href="index.php">
											Home
										</a>
										<i class="fa fa-angle-right"></i>
									</li>
									<li>
										<a href="#">
											Dashboard
										</a>
									</li>
								</ul>
								<div class="panel panel-default" style="padding-left:0px;">
			                        <div class="panel-body" style="padding-left:30px; padding-right:30px; padding-top:30px; padding-bottom:30px;">
			                    		<div class="list-group">
											<span class="list-group-item active bg-purple">
												<h1 align="center" class="list-group-item-heading" style="font-family:segoe UI; color:yellow; margin-left:10px; margin-right:10px;">
													<b>Selamat Datang di SI Perumahan Sidoarjo</b>
					                           	</h1>
											</span>
			                            <br>
			                            <div class="row">
			                                <div class="col-md-12 text-center">
			                                    <div id="coin-slider" class="center-block">
			                                        <img src="assets/img/p1.jpg" />
			                                        <img src="assets/img/p2.jpg" />
			                                        <img src="assets/img/p3.jpg" />
			                                        <img src="assets/img/p4.jpg" />
			                                        <img src="assets/img/p5.jpg" />
			                                        <img src="assets/img/p6.jpg" />
			                                        <img src="assets/img/p7.jpg" />
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="footer-inner">
					2014 &copy; Stanmeter PLN Distribusi Jawa Timur
				</div>
				<div class="footer-tools">
					<span class="go-top">
						<i class="fa fa-angle-up"></i>
					</span>
				</div>
			</div>
		</div>
	</body>
</html>