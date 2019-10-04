<style>
	

	.wrap .desite a:hover{
		color: #eb9316;

	}

	.wrap .exsite a:hover{

		color: #317256;
	}
</style>



<script>
	
	$().alert()
		
</script>


<div class="container">


<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>

		<div class="wrap"> 

						<h2>My Personal Transactions</h2>

	


						<div class="col-md-1"></div>

						<div class="col-md-4">
							
								<div class="desite">
            
						               <a href="<?php echo site_url('Test/Add');?>" class="btn btn-primary"> <b> Add Deposit </b>  </a>
						                <a href="<?php echo site_url('Test/d_list');?>" class="btn btn-primary"> <b> List Deposit </b> </a>
						          </div>

						</div>


						<div class="col-md-1"></div>


						<div class="col-md-4">
							
								 <div class="exsite">

					                 <a href="<?php echo site_url('Test/Addexpense');?>"  class="btn btn-warning"> <b>  Add Expense </b></a>
					                 <a href="<?php echo site_url('Test/e_list');?>" class="btn btn-warning">  <b>  List Expense </b> </a>

					             </div>


						</div>


						<div class="col-md-1"></div>
						
						

				</div>

</div>