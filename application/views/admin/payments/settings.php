<section>
<div class="col-md-6">
   <div class="card">
    

    <div class="card-content">
     <div class="card-body card-dashboard">

      <h3>Fee settings</h3>
      <form action=""  method="post">
        <div class="form-group">
          <input type="hidden" name="fsid" value="<?php echo $settings->fsid?>" >
          <label>Session</label>
          <input class="form-control" type="text" name="site_title" placeholder=" Title of Site" value="<?php echo $settings->session?>">
        </div>
        <div class="form-group">
          <label>Tuition Fee</label>
          <textarea class="form-control" name="address" placeholder="Office Address"><?php echo $settings->amount?></textarea>
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



