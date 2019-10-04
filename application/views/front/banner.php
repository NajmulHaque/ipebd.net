
<!-- banner -->
<div class="banner">
	<div class="container">
		<script src="<?php echo base_url();?>/res/js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>

			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>Welcome to IPE, International Placement for Education.
							</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Plan for big, plan for global.</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Make A Huge Difference Start Your Study plan With Us</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Learning Online Becomes Easier And Faster</h3>
						</div>
					</li>
				</ul>
			</div>
	</div>
</div>
<!-- //banner -->