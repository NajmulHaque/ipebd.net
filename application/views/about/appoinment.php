<style>
	
	.ap-date {
		margin: 10px;
	}
</style>


<div class="container ">
	
<div class="col-md-2"></div>

<h3>Make an Appointment </h3> 

<div class="col-md-8 ap-date">
	

<form method="post" enctype="multipart/form-data" action="<?php echo site_url('Temp/save');?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" class="form-control" name="name" placeholder="Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="text" class="form-control" name="phone" placeholder="Contact Number">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Interested Country</label>
    <input type="text" class="form-control" name="country" placeholder="Interested Country">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Program of Interest</label>
    <input type="text" class="form-control" name="program" placeholder="Program of Interest">
    <p class="help-block">Masters, graduate, Diploma etc.</p>
  </div>


    <div class="form-group">
    <label for="exampleInputPassword1">Appoinment Date </label>
    <input type="date" class="form-control" name="appointment_date" placeholder="Appoinment Date">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>


</div>





<div class="col-md-1"></div>





</div>



