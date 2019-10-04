<style>
	
	
	.uni-details  img{
		height: 300px;
	}

.uni-details p{
	text-align: justify;
}


.uni-details {
	margin: 5px 0  25px; 
}


.u-content{
	margin-top: 15px;

}

.uni-details ul{
	list-style-type: none;
	
}
.uni-details ul li{
		padding-bottom: 5px;
}

}


</style>



<div class="container-fluid uni-details">
	

		
		<img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $uni_details['uni_banner'];?>" width="100%" alt="<?php echo $uni_details['uni_name'];?> banner">


<div class="u-content">
	




<div class="col-md-1"></div>

<div class="col-md-8">

<h1><?php echo $uni_details['uni_name'];?></h1>

<br>
	<p>
		<?php echo $uni_details['uni_desc'];?>
	</p>

	<br>

	<h3> <a href="<?php echo $uni_details['uni_weblink'];?>" target="_blank"> Visit university website </a> </h3>

</div>

	
</div>

<div class="col-md-3">

<p>
	<h4> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> University Location <br> <?php echo $uni_details['uni_location'];?>  </h4>
</p>
	<hr>
	<p>

	<ul> 

		<li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span>    Instuition Type:  <?php echo $uni_details['uni_type'];?>  </li>

		<li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span>  Total Tuition :  <?php echo $uni_details['tution'];?> </li>

		<li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span>   Currency:  <?php echo $uni_details['currency'];?>  </li>

		<li><span class="glyphicon glyphicon-check" aria-hidden="true"></span>   Founded in:  <?php echo $uni_details['founded'];?> </li>

		<li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span>  Intake:  <?php echo $uni_details['intake'];?> </li>

		<li> <span class="glyphicon glyphicon-check" aria-hidden="true"></span>  Programs Offer:  <?php echo $uni_details['programs'];?> </li>

	</ul>
		
		

	</p>
</div>


</div>