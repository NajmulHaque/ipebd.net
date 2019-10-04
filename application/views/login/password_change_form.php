


<div class="container">
  

     <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Change Password</div>
                            
                        </div>  
                        <div class="panel-body" >


                        <h4> Welcome <?php echo $user_info['email'];?></h4>

                        <h5>Please change your temporary password.</h5>

                        

                            <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo site_url('/User/Forget/UpdatePassword/');?>">
                                
                                <div id="signupalert" style=" " class="alert alert-danger">
                                    <p>Error: <?php echo validation_errors(); ?></p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="New Password">
                                    </div>
                                </div>
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Change Password</button>
                                        
                                    </div>
                                </div>
                                
                               
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

  
</div>         