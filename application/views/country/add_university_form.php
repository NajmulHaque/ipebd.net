<div class="col-md-2">
</div>
<div class="col-md-8">






 <h4 class="alert alert-success">  <?php echo $msg;?></h4> 



<h3>Add University</h3>




<ul>


</ul>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo site_url('Home/saveUniversity');?>">


<div class="form-group">

    
    <div class="col-sm-10">
    <input type="text" name="uni_name" id="exampleInputFile" class="form-control" placeholder="University Name">
   
    </div>
  </div>




  <div class="form-group">

   
    <div class="col-sm-10">
    <input type="text" name="tution" id="exampleInputFile" class="form-control" placeholder="Tution Fees">
   
    </div>
  </div>


<div class="form-group">

 <div class="col-sm-10">

  <select name="currency" class="form-control">
  <option >Currency</option>
  <option value="USD $">US Dollar (USD)</option>
  <option value="CAD $">Canadian Doillar (CAD)</option>
  <option value="AUD $">Australian Dollar (AUD)</option>
  <option value="EUR ¢æ">EURO (EUR)</option>
  
   <option value="CNY Â¥">China Yuan Renminbi (CNY)</option>
  <option value="MYR $">Malaysia Ringgit (MYR)</option>
  <option value="NZD $">New Zealand Dollar (NZD)</option>
  
     <option value="SGD $">Singapore Dollar (SGD)</option>
  <option value="SEK $">Sweden Krona (kr)</option>
 
 
  
</select>

</div>


</div>
  <div class="form-group">
<strong>  

<label for="inputEmail3" class="control-label">University Founded Year</label> 

 </strong> <br>
   
    <div class="col-sm-10">
    <input type="number" class="form-control" min="1000" max="2099" step="1" value="2017" name="founded" id="exampleInputFile" >
   
    </div>
  </div>

<div class="form-group">
   
    <div class="col-sm-10">
     
        <select name="uni_type" class="form-control">
          <option >Select Instuition Type</option>
          <option value="Public">Public</option>
          <option value="Private">Private</option>
          <option value="N/A">N/A</option>
          
        </select>


    </div>
  </div>
<div class="form-group">
     <div class="col-sm-10">



      <select name="country_code" class="form-control">

        <option >h</option>
     
       <?php 

          foreach ($country2 as $row) {
        ?>
            <option value="<?php echo $row['country_code'];?>"><?php echo $row['country_name'];?></option>
      

        <?php } ?> 


  
    </select>



      </div>
  </div>


 <div class="form-group">


 
    <div class="col-sm-10">
    <input type="text" class="form-control" name="uni_location" id="exampleInputFile" placeholder="University Location">
   
    </div>
  </div>








  <div class="form-group">

   
    <div class="col-sm-10">
    <textarea name="uni_desc" class="form-control" rows="3" placeholder="University Description"></textarea>
   
    </div>
  </div>



    <div class="form-group">

   
    <div class="col-sm-10">
    <input type="text" class="form-control" name="uni_weblink" id="exampleInputFile" placeholder="University Website Link">
    
    </div>
  </div>





   <div class="form-group">

    <label for="photo_file" class="col-sm-2 control-label">Programs Offer</label>
    <div class="col-sm-10">
    <input type="checkbox" id="inlineCheckbox1" name="programs[]" value="Masters"> Masters

    <input type="checkbox" id="inlineCheckbox1"  name="programs[]" value="Graduate"> Graduate

    <input type="checkbox" id="inlineCheckbox1" name="programs[]" value="Diploma"> Diploma
    </div>
  </div>



   <div class="form-group">

    <label for="photo_file" class="col-sm-2 control-label">intake</label>
    <div class="col-sm-10">
    <input type="checkbox" id="inlineCheckbox1" name="intake[]" value="September"> September

    <input type="checkbox" id="inlineCheckbox1"  name="intake[]" value="January"> January

    <input type="checkbox" id="inlineCheckbox1" name="intake[]" value="May"> May
    </div>
  </div>


<div class="form-group">

    <label for="photo_file" class="col-sm-2 control-label">University Banner</label>
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