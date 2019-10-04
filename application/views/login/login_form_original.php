<style>
  

  .log{

    margin: 0 auto;
    
    background-color: #c6c6c6;
    border-radius: 10px;
    box-shadow: 10px 10px 5px #888888; 

  }


  .log form, .log h5{

    
 
  padding: 10px;
   /* box-shadow: 10px 10px 5px #888888; 
*/
   } 



</style>



<div class="container">
  

  




<div class="col-md-1">
</div>
<div class="col-md-6">



<div class="log">
 <h3 style="background-color: black;">Login</h3>
 





<form class="form-horizontal" method="post" action="<?php echo site_url('login/auth');?>">
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="email" name="email" required="required" class="form-control" id="inputEmail3" placeholder="Email">
    
    </div>
  </div>
  <div class="form-group">
   
    <div class="col-sm-10">
      <input type="password" name="password" required="required" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
  <?php echo validation_errors(); ?>
  </div>
  </div>
  <div class="form-group">
    <div class=" col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>

</form>

  <h5> <a href="<?php echo site_url('/User/Forget/');?>"> Forgot Password? </a></h5>

    </div>  <!-- Finish log class -->

</div>

<div class="col-md-2"></div>


  
  <div class="clearfix"></div>
</div>
