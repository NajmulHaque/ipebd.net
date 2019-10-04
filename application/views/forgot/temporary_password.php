

<!-- this form came from Controller Forgot/TempPass/ -->

<!-- <h3> Login with Your temporary password</h3>

<form class="form-horizontal" method="post" action="<?php echo site_url('/User/Forget/auth2/');?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" required="required" class="form-control" id="inputEmail3" placeholder="Email">
    
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"> Temporary Password</label>
    <div class="col-sm-10">
      <input type="password" name="rs" required="required" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
  <?php echo validation_errors(); ?>
  </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in </button>
    </div>
  </div>

</form>
 -->

<!-- ************************* -->

<div class="container">
  

     <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Temporary Login</div>
                            
                        </div>  
                        <div class="panel-body" >
                          <h4 class="alert alert-warning"> Please login with your temporary password, Check your email.  </h4>

                        

                       <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo site_url('/User/Forget/auth2/');?>">


                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="rs" placeholder="password">
                            </div>
                                    

                             <?php echo validation_errors(); ?>   
                           

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->



                                    <div  class="col-sm-12 controls">

                                    <button id="btn-login" class="btn btn-success" type="submit" >Submit</button>
                                      

                                    </div>
                                </div>


                               
                            </form> 
                         </div>
                    </div>

               
               
                
         </div> 

  
</div>         