<?php include('includes/header.php'); ?>
<section class="container">
	<div class="row">
		<h1 class="col-12">Community Dashboard</h1>
		<nav class="col-2">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Rate a Design</a></li>
				<li><a href="#">Submit a Design</a></li>
				<li><a href="#">About the Process</a></li>
			</ul>
		</nav>
		<div class="col-8">
			<div class="col-12">
				<div class="alert alert-info alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="glyphicon glyphicon-social-facebook"></i> <a href="#">Register</a> with facebook so we can track what you've rated and to submit your own designs!
				</div>
			</div>
			<h3 class="col-12">Latest Designs from the globe</h3>
			<ul class="latest-designs clearfix">
				<li class="col-6 col-sm-6 col-lg-4">
					<a class="btn btn-info" href="#">
						<img class="img-responsive" src="http://placehold.it/300x400">
						<span class="design-info name">Razor</span>
						<span class="design-info author">John Smith</span>
					</a>
				</li>
				<li class="col-6 col-sm-6 col-lg-4">
					<a class="btn btn-info" href="#">
						<img class="img-responsive" src="http://placehold.it/300x400">
						<span class="design-info name">Razor</span>
						<span class="design-info author">John Smith</span>
					</a>
				</li>
				<li class="col-6 col-sm-6 col-lg-4">
					<a class="btn btn-info" href="#">
						<img class="img-responsive" src="http://placehold.it/300x400">
						<span class="design-info name">Razor</span>
						<span class="design-info author">John Smith</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>