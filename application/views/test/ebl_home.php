
<style>
	.wrapper .depo{


		background-color: #49ab81;

		margin-bottom: 5%;
		min-height: 200px;
		padding: 10px;
		color: #FFF;
	}

.wrapper .depo h3{
	text-align: center;
	padding-top: 20px;
}



.depo:hover {
	background-color: #317256;
	color: 	#800000;
}



/**********************************/

	.wrapper .expense{


		background-color: #dc6900;

		margin-bottom: 5%;
		min-height: 200px;
		padding: 10px;
		color: #FFF;
	}

.wrapper .expense h3{
	text-align: center;
	padding-top: 20px;
}



.expense:hover {
	background-color: #a32020;
	color: 	#ffe39f;
}


.balance{
	background-color: #03396c;
	min-height: 150px;
	color: 	#b3cde0;
	box-shadow: 3px 5px 8px 3px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	margin:10px;

}

.balance p{

	color: #FFF;
	text-align: center;
	font-size: 5em;
}


.balance h2{
	text-align: center;
}
</style>



<div class="container">


<div class="wrapper">

<div class="row">
	
<div class="col-md-3"></div>


<?php 
					$count=1;

					$totald = 0;
					$totale = 0;
					$gt =0;

					foreach ($balance as $row) {
				?>	
				

				<?php
					$count=$count+1;
					

				$totald += $row['ebl_d_amount']; 
				$totale += $row['ebl_e_amount'];

				$gt= $totald -$totale;

				}

				?>


<div class="col-md-4 balance">
	

<p> <?php echo $gt ?></p>
<h2> Balance</h2>


	
</div>


<div class="col-md-3"></div>

</div>
	

		<div class="row">


		<div class="col-md-1"></div>
			


		<a href="<?php echo site_url('Test/Add_ebl');?>"> <div class="col-md-4 depo">

		
				
					<h3>DEPOSIT TO EBL CARD</h3>
	

			</div>

</a>



			<div class="col-md-1"></div>



<a href="<?php echo site_url('Test/ebl_d_list');?>">

			<div class="col-md-4 depo ">
				<h3>View Deposit details</h3>
				



			</div>

</a>
	<div class="col-md-1"></div>

		</div>




<div class="row">


		<div class="col-md-1"></div>


		<a href=" <?php echo site_url('Test/add_ebl_ex');?>">
			<div class="col-md-4 expense">
				
					<h3>Expense From EBL CARD</h3>


			</div>


		</a>
			


			<div class="col-md-1"></div>



<a href="<?php echo site_url('Test/ebl_e_list');?>">

			<div class="col-md-4 expense ">
				<h3>View Details Expense</h3>
				



			</div>
</a>

	<div class="col-md-1"></div>

		</div>


	</div>
</div>