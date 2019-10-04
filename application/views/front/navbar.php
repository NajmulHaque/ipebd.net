
<style> 

.search-box:hover{
  color: red;
}
</style>


<div class="header">
    <div class="container">
      <div class="header-nav">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <a style="margin-top: 2px;" class="navbar-brand" href="#"> <img src="<?php echo base_url();?>/res/images/logo.png" width="65" alt="">  </a> <br><i>Since 2003</i> <span> </span>  
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a class="hvr-overline-from-center button2 active" href="<?php echo site_url('Home');?>">Home</a></li>

              <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('About');?>">About</a></li>

              
    


              <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('Service/CountryList');?>">Country</a></li>
              <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('Service/InstituteList');?>">Institute</a></li>

      <li class="dropdown">
          <a href="#" class="dropdown-toggle hvr-overline-from-center button2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('About/Contact');?>">Contact us</a></li>
            <li><a  class="hvr-overline-from-center button2" href="<?php echo site_url('Temp/news_event');?>">News & Events</a></li>
            <li><a  class="hvr-overline-from-center button2" href="<?php echo site_url('Temp/testimonial');?>">Testimonials</a></li>
            <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('Temp/faq');?>">FAQ</a></li>
            <li><a class="hvr-overline-from-center button2" href="<?php echo site_url('Temp/newsletter');?>">News Letter</a></li>
            
          </ul>
        </li>


      <!--          <li class="dropdown">
        <a class="hvr-overline-from-center button2" href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
          <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
          <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
        </ul>
        </li> -->


            
            </ul>
           <div class="search-box">
              <div id="sb-search" class="sb-search">
             
                  
                 <a href="<?php echo site_url('About/Register');?> ">   <span style="font-size: 1.5em; padding-top: 3px; color: black; " class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>  </a>
                
             
              </div>
            </div> 

          </div><!-- /navbar-collapse -->

          
          
          <!-- search-scripts -->
          <script src="<?php echo base_url();?>/res/js/classie.js"></script>
          <script src="<?php echo base_url();?>/res/js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
          <!-- //search-scripts -->
        </nav>
      </div>
    </div>
</div>
<!-- header -->
