<style>
  

  .ebl-depositbox{
    background-color: #602320;
    border-radius: 8px;
    padding: 20px;
    color: #e7eff6;
     margin-bottom: 25px;
  }




</style>



<div class="container">
  
  <div class="col-md-2"> </div>



      <div class="col-md-5 ebl-depositbox">
       <h2>Add New Expense from EBL CARD</h2>

                    <form method="post" action="<?php echo site_url('Test/save_ebl_expense');?>">

                      <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">From</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Where From" name="name">
                      </div>

                      

                       <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Amount" name="ebl_e_amount">
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Reference</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reference" name="ref">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Comments</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Comments" name="comments">
                      </div>


                     
                      
                      <button type="submit" class="btn btn-info">Submit</button>
                    </form>

        </div>

<!--  <?php $this->load->view('test/related_link');?> -->
  
</div>