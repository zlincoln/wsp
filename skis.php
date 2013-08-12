<?php include('includes/header.php'); ?>
<section class="container">
	<div class="row">
		<h1 class="col-12">2013 Electronics <a href="#" class="btn btn-primary btn-lg pull-right">Order Now</a></h1>
		<div class="col-12 col-sm-6 col-lg-3 product-sidebar" style="min-height: 900px; position:relative;">
			<div class="product-wrapper">
				<div class="btn-group btn-group-justified" data-toggle="buttons">
					<label class="btn btn-primary active">
						<input type="radio" name="view-toggle" data-toggle="view-1">
						<span>Top</span>
					</label>
					<label class="btn btn-primary">
						<input type="radio" name="view-toggle" data-toggle="view-2">
						<span>Base</span>
					</label>
				</div>
				<div class="image-wrapper">
					<img class="img-responsive product-image active" src="http://placehold.it/500x1200&amp;text=Ski+image" alt="electronics" id="view-1">
					<img class="img-responsive product-image" src="http://placehold.it/500x1200&amp;text=Ski+image" alt="electronics 2" id="view-2">
				</div>
				<a href="#" class="btn btn-primary btn-lg btn-block">Order Now</a>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-9">
			<div class="product-copy">
				<h2>A Park Ski Unlike Any Other</h2>
				<p>Back for another season on the hill with improvements - Edges no longer wrap around ski tip and tail to eliminate blowout and tip delamination. Product development backed by the best of the East Coast - Riders Connor Geata, Jamie Amodeo, Hunter Tyrrell and Lucas Vianna.</p>
				<p>Electronics is one of the only, if not the only park ski on the market with pop. Most park skis are damp leaving you with a dull ride. The Electronics ski is softer than most skis, but has snap unlike any others. With it's ultra low weight, soft flex, and extreme pop you're left with a ski that's tons of fun in the park, and a solid contender anywhere else on the mountain. Whether you're looking for your next park ski, or just a ride that's fun everywhere you take it - you've found the right ski. Electronics.</p>
				<p>This year's graphic is born from the imagination of company photographer Charlie Stemen.</p>
			</div>
			<div id="product-images" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#product-images" data-slide-to="0" class="active"></li>
					<li data-target="#product-images" data-slide-to="1"></li>
					<li data-target="#product-images" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img class="img-responsive" src="http://placehold.it/1500x900&amp;text=product+video+1">
					</div>
					<div class="item">
						<img class="img-responsive" src="http://placehold.it/1500x900&amp;text=product+image+2">
					</div>
					<div class="item">
						<img class="img-responsive" src="http://placehold.it/1500x900&amp;text=product+image+3">
					</div>
				</div>
				<a class="left carousel-control" href="#product-images" data-slide="prev">
					<i class="glyphicon glyphicon-chevron-left"></i>
				</a>
				<a class="right carousel-control" href="#product-images" data-slide="next">
					<i class="glyphicon glyphicon-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<!--
<script type="text/javascript">
	$(function(){
		setTimeout(function(){
			var $product_wrapper = $('div.product-wrapper');
			$product_wrapper.affix({
				offset:{
					top: function(){
						return (this.top = parseInt($('body').css('padding-top'), 10))
					},
					bottom: function(){
						return (this.bottom = $('footer').outerHeight(true))
					}
				}
			})
		}, 100);
		function assignAffixWidth(){
			if($(window).width() >= 767){
				$('div.product-wrapper').css('max-width', $('div.product-sidebar').width()+'px');
			}else{
				$('div.product-wrapper').css('max-width', 'none');
			}
		}
		$(window).on('resize', assignAffixWidth());
		assignAffixWidth();
	});
</script>
-->
<?php include('includes/footer.php'); ?>