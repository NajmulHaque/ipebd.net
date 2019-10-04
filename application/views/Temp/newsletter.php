  

<div class="container-fluid">
	
	<div class="col-md-4" style="min-height: 400px; margin-top: 30px;">
		
		<h1>Some Newsletter</h1>
		<hr>

				<?php 
					

					foreach ($news as $row) {
				?>


				<div  class="news">
                          
				     <ul>
				    	<li><?php echo $row['email'];?></li>
				    </ul>	
				</div>
               <hr>
    </div>
<?php } ?>

</div>