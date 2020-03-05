<section>
<div class="col-md-6">
   <div class="card">
    

    <div class="card-content">
     <div class="card-body card-dashboard">

       <h3>Site Logo</h3>
       <div>
         <img src="/uploads/images/<?php echo $settings->logo?>" height="150" width="150">
       </div>
      <form action=""  method="post" enctype="multipart/form-data">
        <input type="hidden" name="stid" value="<?php echo $settings->stid?>" >
        <div class="form-group">
          <input type="file" name="logo" >
          <input type="submit" name="upload" value="upload">
        </div>
      </form>
      <h3>Site Information</h3>
      <form action=""  method="post">
        <div class="form-group">
          <input type="hidden" name="stid" value="<?php echo $settings->stid?>" >
          <label>Site Title</label>
          <input class="form-control" type="text" name="site_title" placeholder=" Title of Site" value="<?php echo $settings->site_title?>">
        </div>
        <div class="form-group">
          <label>Addresses</label>
          <textarea class="form-control" name="address" placeholder="Office Address"><?php echo $settings->address?></textarea>
        </div>
        <div class="form-group"><label>Phone Numbers</label>
          <input class="form-control" type="text" name="phone" placeholder="+234859594334, +23343454545" value="<?php echo $settings->phone?>">
        </div>
        <div class="form-group"><label>Emails</label>
          <input class="form-control" type="text" name="email" placeholder="mai@gmail.com, mail2@gmail.com," value="<?php echo $settings->email?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success"  name="update"  value="save">
        </div>
       
      </form>
    </div>
  </div>
</div>
</div>

</section>



