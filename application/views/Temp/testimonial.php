
<div class="teachers">
	<div class="container">
		<div class="teach-head">
			<h3>TESTIMONIALS</h3>
			<p>What people say about our service.</p>
		</div>
		<div class="team-grids">
			
			<?php
                foreach ($test as $row) {
			?>

			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<img src="<?php echo base_url();?>/res/images/avatar.png" alt=""/>
					<h3> <?php echo $row['name'];?></h3>
					<h4> <?php echo $row['user_type'];?> </h4>
					<p> <?php echo $row['comments'];?></p>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twitt" href="#"></a></li>
						<li><a class="goog" href="#"></a></li>
						<li><a class="drib" href="#"></a></li>
					</ul>
				</div>
			</div>
 <?php } ?>


			<div class="clearfix"></div>
		</div>
	</div>
</div>


