<!DOCTYPE html>
<html>
<head>
	<?php
		$current_page = basename($_SERVER['PHP_SELF'], '.php');
		$pages = array('index', 'skis', 'team', 'blog', 'about', 'community');
	?>
	<title>HG Skis :: <?= ucfirst($current_page); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<header class="clearfix">
		<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="images/logo-white.png" alt="HG Skis" class="img-responsive"></a>
					<a href="#footer-nav" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<form class="navbar-right navbar-form col-xs-3" role="search">
						<div class="input-group">
							<input type="search" class="form-control" placeholder="Search">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
							</span>	
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php foreach($pages as $page): ?>
						<li <?= ($page == $current_page) ? ' class="active"' : ''; ?>><a href="<?= $page.'.php'; ?>"><?= ($page == 'index') ? 'Home' : ucfirst($page); ?></a></li> 
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<div id="main">