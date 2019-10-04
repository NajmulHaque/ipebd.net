<style>
	.country-st{
		background-color: #65c3ba;
		
		
				padding: 5px;
				min-height: 400px;
				min-width: 250px;
				border: 2px solid #FFF;
				margin-bottom: 10px;
				border-radius: 5px;
	}

	.country-st ul{
		list-style-type: none;
	}
	.country-st:hover{
		background-color: #35a79c;
		color: red;
	}

.country-st ul{
	color: #FFF;
}

.country-st img{
	min-height: 200px;
}


.country-st h4{
	color: #006666;
}

</style>


<div class="banner page-head">
</div>

<div class="container">

<hr>
	
	<h2 style="text-align: center;">COUNTRIES</h2>

	
<hr>
	

		<?php 
					

					foreach ($country as $row) {
				?>
	

		<div class="col-md-3 country-st">

		<a href="<?php echo site_url('Home/University_list/'.$row['country_code']);?>">
			
			<img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $row['country_banner'];?>" alt="<?php echo $row['country_name'];?> banner">
			<hr>
			<h4 style="text-align: center;"> <u>  STUDY IN <?php echo $row['country_name'];?></u> </h4>
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
		

</div>