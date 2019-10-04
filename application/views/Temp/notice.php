  

<div class="container">
	
	<div class="col-md-2"></div>

	<div class="col-md-8" style="min-height: 400px; margin-top: 30px;">
		
		<h1 style="text-align: center;">Some Important Notice</h1>
		<hr>

				<?php 
					

					foreach ($notice as $row) {
				?>


				<div  class="news">
                          
				    <a href="<?php echo site_url('Temp/news_event' .$row['notice_id']);?>">
				       <h2 style="text-transform: uppercase;">Notice: <?php echo $row['notice_title'];?></h2>
  				       <p>DESCRIBTION: <?php echo $row['notice_desc'];?></p>
				    </a>
                     
				     <ul>
				    	<li>Status: <?php echo $row['notice_status'];?></li>
				    </ul>	
				</div>
               <hr>

<?php } ?>


	</div>

	<div class="col-md-2"></div>
</div>