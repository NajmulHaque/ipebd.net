<div class="col-md-2">

</div>
<div class="col-md-10">



<h2>Profit / Loss List</h2>



</div>


<table class="table table-hover"> 
<thead> 
<tr> 
<th>#</th> 
<th>Total Deposit</th> 
<th>Total Expense</th> 
<th>Profit/Loss</th> 

 
</tr> 
</thead> 
<tbody> 

<?php 
	$count=1;

	$totald = 0;
	$totale = 0;

	foreach ($expens_list as $row) {
?>
<tr>
<td><td><?php echo $row['id'];?></td> </td>
<td><?php echo $row['d_amount'];?></td> 

<td><?php echo $row['e_amount'];?></td> 
</tr>	
 <?php

	

$totald += $row['d_amount']; 
$totale += $row['e_amount'];

$gtotal = $totald - $totale;

}

?>


<tr> 
<th>#</th> 
<th><?php echo $totald;?></th> 
<th><?php echo $totale;?></th> 
<th><?php echo $gtotal;?></th>




 
</tr> 


</tbody> 
</table>
