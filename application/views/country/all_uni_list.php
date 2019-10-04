
<style>
	
		.uni-content{

			padding: 0 50px;
			text-align: justify;
			margin-top: 10px;
		}



.uni-content h3{
	padding: 5px;

}

 .uni-list h3{

	text-transform: capitalize;
}


.uni-content h3 a:hover{

	color: #74d600;
}


.banner-img img{
	height: 300px;
}
</style>	


<div class="banner-img">
	




<img class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $uni_list1['country_banner'];?>" alt="<?php echo $uni_list1['country_name'];?> banner" width="100%">

</div>

<div class="clearfix"></div>

<div class="container-fluid uni-content">


			<hr>
	

<p>
	 <h2> Why Choose <?php echo $uni_list1['country_name'];?>  ?

	 <br>
	 <br>
</p></h2> 



<p>
	<?php echo $uni_list1['country_des'];?> 

</p>


<br>



<?php 
					

					foreach ($uni_list as $row) {
				?>

<div class="uni-list">
	



<h3 > <a style="text-transform: capitalize;" href="<?php echo site_url('Home/University_Details/'.$row['uni_id']);?>">  <?php echo $row['uni_name'];?>   </a>  </h3>

</div>
		

	<?php } ?>			


</div>
