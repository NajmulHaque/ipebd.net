<style>
  

  .expensebox{
    background-color: #e8702a;
    border-radius: 8px;
    padding: 20px;
    color: #e7eff6;
    margin-bottom: 25px;
  }


</style>




<div class="container">
  
  <div class="col-md-2"> 
  



  </div>

      <div class="col-md-5 expensebox">

      <h2>Add new Expense</h2>

                    <form method="post" action="<?php echo site_url('Test/saveEX');?>">

                      <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">From</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Where From" name="name">
                      </div>

                      <div class="radio">
                      <label>
                        <input type="radio" name="cetagory" id="blankRadio1" value="cash" aria-label="EBL"> Cash

                      </label>
                     <br>
                      <label>
                        <input type="radio" name="cetagory" id="blankRadio1" value="bkash" aria-label="EBL"> Bkash
                        
                      </label>
                       <br>
                      <label>
                        <input type="radio" name="cetagory" id="blankRadio1" value="NCC Bank" aria-label="EBL"> NCC Bank
                        
                      </label>
                       <br>
                       
                    </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Amount" name="expense">
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Reference</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Reference" name="ref">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Comments</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Comments" name="comments">
                      </div>


                     
                      
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

        </div>




        <!-- <?php $this->load->view('Test/related_link');?> -->

</div>