<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('Test');?>">Tanvir</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Deposit <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('Test/Add');?>">Add Deposit</a></li>
            <li><a href="<?php echo base_url('Test/d_list');?>">List Deposit</a></li>
           
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Expense <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('Test/Addexpense');?>">Add Expense</a></li>
            <li><a href="<?php echo base_url('/expense-list/');?>">List Expense</a></li>
           
          </ul>
        </li>
            
              <li><a href="<?php echo base_url('Test/ebl');?>">EBL Credit Card</a></li>

      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('Login');?>">Sign In</a></li>
        <li><a href="<?php echo base_url('Login/logout');?>">Sign Out</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>