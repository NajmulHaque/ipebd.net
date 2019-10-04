<div class="container">
	


		<div class="col-md-8">

				<!-- filter the result	 -->
				<form method="post" action="<?php echo site_url('Test/filter');?>">

				  <div class="form-group">
				    
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Filter by From / Cetagory/ Reference" method="post" name="keyword">
				  </div>


				 <button type="submit" class="btn btn-default">Submit</button>
				</form>

				<!-- filter the result end	 -->


				<h2>Deposit List  </h2>

				<!-- <table class="table table-bordered">  -->

			
				<!-- ***************** Test grid View*************************** -->



		<div class="container">


			<?php 
					

					foreach ($deposit_list as $row) {
				?>	
			<div class="col-md-3">

				
				
				
				<h3> <?php echo substr(strip_tags($row['name']),0,20);?> </h3>
				<p> Deposit <?php echo $row['deposit'];?></p>
				<ul>
					<li><?php echo $row['date'];?></li>
				</ul>


<select class="form-control">
 

</select>  

			</div>


		

<?php 
}
?>



		</div>


<!-- *********************************************** -->


				<!-- <thead> 
				
				 
				
				
				</thead> 
				<tbody> 
				<td><?php echo $row['date'];?></td>
					
				
					<td><?php echo $row['deposit'];?></td> 
					<td><?php echo $row['deposit'];?></td> 
 -->
				 
	
				
 	


			<!-- 
				</tbody> 
				</table> -->

		</div>


 				<!-- <?php $this->load->view('test/related_link');?> -->

 	</div>			