<div class="col-md-2">
</div>
<div class="col-md-8">

<?php echo $msg;?>


<h3>Add Country</h3>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url('Home/saveCountry');?>">



<div class="form-group">
    <label for="exampleInputEmail1">Country Name</label>
    <input type="text" class="form-control" name="country_name" id="exampleInputEmail1" placeholder="Country Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Program Offers</label>
    <input type="text" class="form-control" name="programs" id="exampleInputPassword1" placeholder="Program Offers">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Job Oportunity</label>
    <input type="text" class="form-control" name="job" id="exampleInputEmail1" placeholder="Job Oportunity">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IELTS Score</label>
    <input type="text" class="form-control" name="ielts" id="exampleInputPassword1" placeholder="IELTS Score">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Visa Success Rate</label>
    <input type="text" class="form-control"  name="visa_rate" id="exampleInputEmail1" placeholder="Visa Success Rate">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bank Loan Opportunity</label>
    <input type="text" class="form-control" name="bank_loan" id="exampleInputPassword1" placeholder="Bank Loan Opportunity">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Estimited Living Cost</label>
    <input type="text" class="form-control" name="est_livingcost" id="exampleInputEmail1" placeholder="Estimited Living Cost">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Country Description</label>
    <textarea name="country_des" class="form-control" rows="3" placeholder="Country Description"></textarea>
  </div>




<div class="form-group">

    <label for="photo_file" class="col-sm-2 control-label">Country Banner</label>
    <div class="col-sm-10">
    <input type="file" name="userfile" id="exampleInputFile">
    <p class="help-block" style="font-size:.9em;">Allowed type- jpg|png, Max size 500KB</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Register</button>
    </div>
  </div>
</form>

</div>
<div class="col-md-2"></div>