<!DOCTYPE html>

<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>Searching | Stanmeter</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2-metronic.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.css"/>
		<link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/house.ico"/>

		<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/core/app.js"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/custom/table-managed.js"></script>
		<script src="<?php echo base_url(); ?>assets/scripts/custom/table-editable.js"></script>
		<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableEditable.init();
		});
		</script>
		<script type="text/javascript">
			function clearFields() {
				$('#kategori').val("lahan");
				$('#kunci').val("");
			}
		</script>
	</head>
	<body class="page-header-fixed page-sidebar-fixed">
		<div class="header navbar navbar-fixed-top">
			<div class="header-inner">
				<a class="nav navbar-nav pull-left" href="index.php" style="padding-left:15px; padding-top:4px">
					<img src="<?php echo base_url(); ?>assets/img/logo-perumahan.png" alt="logo" class="img-responsive"/>
				</a>
				<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<img src="<?php echo base_url(); ?>assets/img/menu-toggler.png" alt=""/>
				</a>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" src="<?php echo base_url(); ?>assets/img/admin-icon.png"/>
							<span class="username">
								<?php echo $username;?>
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
								<a href="<?php echo site_url()?>/logout">
									<i class="fa fa-key"></i> Log Out
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				<div class="page-sidebar navbar-collapse collapse">
					<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
						<li>
							<a href="<?php echo site_url(); ?>/dashboard">
								<i class="fa fa-home"></i>
								<span class="title">
									Dashboard
								</span>
								<span class="selected">
								</span>
							</a>
						</li>
						<li class="start active ">
							<a href="<?php echo site_url(); ?>/search">
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
							Searching <small>Pencarian Pelanggan Berdasarkan ID Pel dan Nama/Alamat</small>
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
										Searching
									</a>
								</li>
							</ul>
							<div class="panel panel-default">
		                        <div class="panel-body" style="padding-left:30px; padding-right:30px; padding-top:30px;">
									<div class="col-md-6 col-md-offset-3">
										<div class="portlet box grey">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-search"></i> Pencarian Pelanggan
												</div>
											</div>
											<div class="portlet-body form">
												<form role="form" method="POST" action="<?php echo site_url(); ?>/search">
													<div class="form-body">
														<div class="form-group">
															<label>Kategori :</label>
															<div class="controls">
												  				<select class="form-control" type="text" id="kategori" name="kategori">
																    <option value="lahan">Lahan</option>
																    <option value="rumah">Rumah</option>
																</select>
												  			</div>
														</div>
														<div class="form-group">
															<label>Kata Kunci :</label>
															<div class="input-icon">
																<i class="fa fa-user"></i>
																<input type="text" class="form-control" placeholder="Ex: Sidoarjo" id="kunci" name="kunci">
															</div>
														</div>
													</div>
													<div class="form-actions right">
														<button type="button" class="btn default" onclick="clearFields()">Cancel</button>
														<button type="submit" class="btn green">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<?php
										if($iscontain)
										{
											echo'
											<div class="row">
												<div class="col-md-12">
													<div class="portlet box grey">
														<div class="portlet-title">
															<div class="caption">
																<i class="fa fa-list"></i>Hasil Pencarian
															</div>
														</div>
														<div class="portlet-body">
															<table class="table table-striped table-bordered table-hover" id="sample_editable_1">
															<thead>
															<tr>
																<th style="text-align:center;">
																	 KECAMATAN
																</th>
																<th style="text-align:center;">
																	 PERUSAHAAN
																</th>
																<th style="text-align:center;">
																	 PERUMAHAN
																</th>
																<th style="text-align:center;">
																	 LOKASI
																</th>
																<th style="text-align:center;">
																	 DETAIL
																</th>
															</tr>
															</thead>
															<tbody>';
															foreach($perumahan as $row)
															{
																$nama_kec = $row->nama_kec;
																$nama_prsh = $row->nama_prsh;
																$nama_prmh = $row->nama_prmh;
																$nama_lok = $row->nama_lok;
																// $kirim = $kategori."^".$nama_kec."^".$nama_prsh."^".$nama_prmh."^".$nama_lok;
																$kirim = 'NULL';
																echo'
																<tr class="odd gradeX">
																	<td>
																		 '.$nama_kec.'
																	</td>
																	<td>
																		'.$nama_prsh.'
																	</td>
																	<td>
																		'.$nama_prmh.'
																	</td>
																	<td>
																		 '.$nama_lok.'
																	</td>
																	<td>
																		<form role="form" method="POST" action="detail.php">
																			<input type="hidden" name="kirim" value="' .$kirim. '">
																			<a href="javascript:;" onclick="parentNode.submit();" class="btn btn-md green center-block" >
																				<i class="fa fa-search"></i> Tampilkan
																			</a>	
																		</form>
																		
																	</td>
																</tr>';
															}
															echo'
															</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>';
										}
									?>
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
	</body>
</html>