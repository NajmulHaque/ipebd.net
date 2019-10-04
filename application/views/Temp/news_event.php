  

<div class="container">
	
	<div class="col-md-2"></div>

	<div class="col-md-8" style="min-height: 400px; margin-top: 30px;">
		
		<h1 style="text-align: center;">News and Events</h1>
		<hr>

				<?php 
					

					foreach ($event as $row) {
				?>


				<div  class="news">
                          
				    <a href="<?php echo site_url('Temp/news_event' .$row['event_id']);?>">
				       <h2 style="text-transform: uppercase;">Event: <?php echo $row['event_title'];?></h2>
  				       <p>DESCRIBTION: <?php echo $row['event_desc'];?></p>
				    </a>
                     
				     <ul>
				    	<li>Date: <?php echo $row['event_date'];?></li>
				    	<li>Status: <?php echo $row['event_status'];?></li>
				    </ul>	
				</div>
               <hr>


<?php } ?>



	</div>

	<div class="col-md-2"></div>
</div>