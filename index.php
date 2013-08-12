<?php include('includes/header.php'); ?>
<section id="hero" class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="jumbotron">
				<h1>HG Skis</h1>
				<p>Announcing the 2013 Electronics</p>
				<p><a class="btn btn-primary btn-lg">Learn More</a></p>
			</div>
		</div>
	</div>
</section>
<section id="action-items" class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 col-4">
			<a href="skis.php" class="btn btn-primary">
				<img src="http://placehold.it/400x200&amp;text=Ski+image+placeholder" alt="Electronics" class="img-responsive">
				<p>Grab Some Gear</p>
			</a>
		</div>
		<div class="col-lg-4 col-sm-4 col-4">
			<a href="team.php" class="btn btn-primary">
				<img src="http://placehold.it/400x200&amp;text=Rider+image+placeholder" class="img-responsive">
				<p>See HG In Action</p>
			</a>
		</div>
		<div class="col-lg-4 col-sm-4 col-4">
			<a href="team.php" class="btn btn-primary">
				<img src="http://placehold.it/400x200&amp;text=Design+image+placeholder" class="img-responsive">
				<p>Submit a Design</p>
			</a>
		</div>
	</div>
</section>
<section id="news" class="container">
	<div class="row">
		<h3 class="col-12">Latest Updates</h3>
		<aside class="col-lg-4 col-sm-6">
			<p>Stay current with the latest goodness from the industry. <a href="blog.php">See the latest posts</a> or choose your preference below</p>
			<?php include('includes/blog-nav.php'); ?>
		</aside>
		<div class="col-lg-8 col-sm-6">
			<div id="latest-blog-items" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#latest-blog-items" data-slide-to="0" class="active"></li>
					<li data-target="#latest-blog-items" data-slide-to="1"></li>
					<li data-target="#latest-blog-items" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-lg-7 col-sm-12">
								<img class="img-responsive" src="http://placehold.it/600x400&amp;text=blog+item+1">
							</div>
							<div class="col-lg-4 col-sm-12">
								<h4>Post Title 1</h4>
								<p>Post content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-7 col-sm-12">
								<img class="img-responsive" src="http://placehold.it/600x400&amp;text=blog+item+2">
							</div>
							<div class="col-lg-4 col-sm-12">
								<h4>Post Title 2</h4>
								<p>Post content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-lg-7 col-sm-12">
								<img class="img-responsive" src="http://placehold.it/600x400&amp;text=blog+item+3">
							</div>
							<div class="col-lg-4 col-sm-12">
								<h4>Post Title 3</h4>
								<p>Post content Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#latest-blog-items" data-slide="prev">
					<i class="glyphicon glyphicon-chevron-left"></i>
				</a>
				<a class="right carousel-control" href="#latest-blog-items" data-slide="next">
					<i class="glyphicon glyphicon-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php'); ?>