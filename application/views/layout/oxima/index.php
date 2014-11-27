<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?php echo site_url(); ?>/assets/img/favicon.jpg">

		<title>Oxima</title>

		<link href="<?php echo site_url(); ?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>/assets/css/custom.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>/assets/css/jquery.growl.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>/assets/css/jquery.dataTables.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>/assets/css/jquery-ui.min.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>/assets/js/fancy-box/jquery.fancybox.css" rel="stylesheet">
		<script src="<?php echo site_url(); ?>/assets/js/jquery/jquery-1.11.1.min.js"></script>
		<script src="<?php echo site_url(); ?>/assets/js/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo site_url(); ?>/assets/js/fancy-box/jquery.fancybox.pack.js"></script>
		<script src="<?php echo site_url(); ?>/assets/js/custom.js"></script>

		<style type="text/css">
		.navbar {
			margin-bottom: 20px;
		}
		ul.nav li.dropdown:hover > ul.dropdown-menu {
			display: block;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}
		ul.dropdown-menu li a{
			color: #000 !important;
		}
		.box {
		    margin-right: 0px;
		    margin-left: 0px;
		    background-color: #FFF;
		    border-color: #DDD;
		    border-width: 1px;
		    border-radius: 4px 4px 0px 0px;
		    box-shadow: none;
		}
		</style>
	</head>

	<body>

		<div class="container header">
			<div class="col-md-12">
				<nav class="navbar navbar-default" role="navigation" style="margin:0; padding:0;">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href=""></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<?php
									/* tampilkan menu top */
									//echo generate_menu('top');
								?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<?php
									/* tampilkan menu top */
									echo generate_menu('top');
								?>
							</ul>
						</div>
					</div>
				</nav>
				<?php if(get_user()==false): ?>
				<div class="row">&nbsp;</div>
				<div class="col-md-8 putih">
					<div class="header-title"><?php echo APPTITLE; ?></div>
					<p class="header-desc"><?php echo web_content('HOME_TEXT_HEADER') ?></p>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs pad-bottom">
					<center><img src="<?php echo site_url(); ?>assets/img/Maqui Berry.jpg" class="radius" /></center>
				</div>
				<?php endif; ?>
			</div>
		</div> 
		
		<div class="container" style="min-height:400px;">
			<div class="row">&nbsp;</div>
			<?php echo $content_for_layout ?>
		</div>
		
		<script src="<?php echo site_url(); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo site_url(); ?>/assets/js/jquery.growl.js"></script>
		<script type="text/javascript">
			$(function(){
				<?php if(isset($alert) && !empty($alert)): ?>
				$.growl.notice({message:'<?php echo addslashes($alert); ?>'});
				<?php endif; ?>
			})
		</script>
	</body>
</html>
