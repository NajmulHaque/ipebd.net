
<div class="container">
	

     <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Password Reset</div>
                            
                        </div>  
                        <div class="panel-body" >

                       <p> Enter your e-mail address below to reset your password.</p> 

                            <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo site_url('/User/Forget/');?>">
                                
                                <div id="signupalert" style=" " class="alert alert-danger">
                                    <p>Error: <?php echo validation_errors(); ?></p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Send Email</button>
                                        
                                    </div>
                                </div>
                                
                               
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

	
</div>         