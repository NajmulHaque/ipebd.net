


<div class="container">
  

     <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Change Your Information</div>
                            
                        </div>  
                        <div class="panel-body" >


                        <h4> Welcome <?php echo $user_info['name'];?></h4>

                        <h5>You can change your password.</h5>

                        

                            <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo site_url('/Login/UpdateMainPassword/');?>">
                                
                                <div id="signupalert" style=" " class="alert alert-danger">
                                    <p> <?php echo validation_errors(); ?></p>
                                    <span></span>
                                </div>
                                   
                            
                              <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Your Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="your name" value="<?php echo $user_info['name'];?>">
                                    </div>
                                </div>


                                  <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Your Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="<?php echo $user_info['email'];?>" value="<?php echo $user_info['email'];?>">
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="New Password">
                                    </div>
                                </div>


                                
                                  
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Update Information</button>
                                        
                                    </div>
                                </div>
                                
                               
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

  
</div>         