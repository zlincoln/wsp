<!DOCTYPE html>
<html>
<head>
	<title>HG Skis</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$current_page = basename($_SERVER['PHP_SELF'], '.php');
		$pages = array('index', 'skis', 'team', 'blog', 'about', 'community');
	?>
	<header class="clearfix">
		<div class="navbar-fixed-top navbar-inverse">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img src="http://placehold.it/170x50&amp;text=HG+Skis" alt="HG Skis" class="img-responsive"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<ul class="nav navbar-nav nav-collapse collapse navbar-responsive-collapse">
					<?php foreach($pages as $page): ?>
					<li <?= ($page == $current_page) ? ' class="active"' : ''; ?>><a href="<?= $page.'.php'; ?>"><?= ($page == 'index') ? 'Home' : ucfirst($page); ?></a></li> 
					<?php endforeach; ?>
				</ul>
				<form class="navbar-form form-inline pull-right col-6 col-sm-6 col-lg-3">
					<div class="input-group">
						<input type="search" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</span>	
					</div>
				</form>
			</div>
		</div>
	</header>