<style>
	.country-st{
		background-color: #c6c6c6;
		
		padding: 5px;
				min-height: 400px;
				min-width: 250px;
				border: 2px solid #FFF;
	}

	.country-st ul{
		list-style-type: none;
	}
	.country-st:hover{
		background-color: red;
		color: red;
	}

</style>


<div class="banner page-head">
</div>

<div class="container">
	
	<h2>COUNTRIES</h2>

	

	

		<?php 
					

					foreach ($country as $row) {
				?>
	

		<div class="col-md-3 country-st">

		<a href="<?php echo site_url('Home/University_list/'.$row['country_code']);?>">
			
			<img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $row['country_banner'];?>" alt="<?php echo $row['country_name'];?> banner">
			<hr>
			<h4 style="text-align: center;">STUDY IN <?php echo $row['country_name'];?> </h4>
			<ul>
				<li> <?php echo $row['programs'];?> </li>

				<li> Job Opotrunity: <?php echo $row['job'];?> </li>

				<li> Visa rate: <?php echo $row['visa_rate'];?> </li>

				<li> Bank Loan: <?php echo $row['bank_loan'];?> </li>

				

				<li> IELTS requirements:  <?php echo $row['ielts'];?> </li>
			</ul>

		</a>	
		</div>
<?php } ?>
		
\
</div>