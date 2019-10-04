<style>
	.country-st{
		background-color: #5f9ea0;
		
		
				padding: 5px;
				min-height: 360px;
				min-width: 250px;
				border: 2px solid #FFF;
				margin-bottom: 10px;
				border-radius: 5px;
	}

	.country-st ul{
		list-style-type: none;
	}
	.country-st:hover{
		background-color: #c68642;
		color: red;
	}

.country-st ul{
	color: #FFF;
	font-size: .8em;
}


.country-st img{
	min-height: 200px;
}
</style>


<div class="banner page-head">
</div>

<div class="container">

<hr>
	
	<h2 style="text-align: center;">PARTNER UNIVERSITY / INSTITUTE</h2>

	
<hr>
	

		<?php 
					

					foreach ($institute as $row) {
				?>
	

		<div class="col-md-3 country-st">

		<a href="<?php echo site_url('Home/University_Details/'.$row['uni_id']);?>">
			
			<img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $row['uni_banner'];?>" alt="<?php echo $row['uni_name'];?> banner">
			<hr>
			<h5 style="text-align: center;"><?php echo $row['uni_name'];?> </h5>

		<br>
			<ul>
			<!-- 	<li> <?php echo $row['programs'];?> </li> -->

				<li> <span class=" glyphicon glyphicon-usd " aria-hidden="true"></span> Est Tution: <?php echo $row['tution'];?> </li>

				<li> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <?php echo $row['uni_location'];?> </li>

				<!-- <li> Bank Loan: <?php echo $row['bank_loan'];?> </li>

				

				<li> IELTS requirements:  <?php echo $row['ielts'];?> </li> -->
			</ul>

		</a>	
		</div>
<?php } ?>
		

</div>