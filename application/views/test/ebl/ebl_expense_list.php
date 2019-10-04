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


				<h2>Expense List EBL Card </h2>

				<table class="table table-hover"> 
				<thead> 
				<tr> 
				<th>#</th> 
				<th>Date</th> 
				<th>Amount</th>
				<th>From</th> 
				<th>Reference</th> 
				 
				<th>Comments</th> 
				<th></th> 
				 
				</tr> 
				</thead> 
				<tbody> 

				<?php 
					$count=1;

					$total = 0;

					foreach ($ebl_list as $row) {
				?>	
				<tr> <th scope="row"><?php echo $count;?></th> 
				<td><?php echo $row['date'];?></td> 
				<td><?php echo $row['ebl_e_amount'];?></td> 
				<td><?php echo $row['name'];?></td> 
				
				
				<td><?php echo $row['ref'];?></td> 
				<td><?php echo $row['comments'];?></td> 

				</tr> 

				<?php
					$count=$count+1;
					

				$total += $row['ebl_e_amount']; 

				}

				?>


			<tr> 
				<th>#</th> 
				<th>Date</th> 
				<th>Total ( <?php echo $total ?>) </th> 
				<th>From</th> 
			<th>Reference</th> 
				
				<th>Comments</th> 
				<th></th> 
				 
				</tr> 


				</tbody> 
				</table>

		</div>


 				<!-- <?php $this->load->view('test/related_link');?> -->

 	</div>			