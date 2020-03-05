<div class="container">

<div class="col-md-5">
 
  <h3>Payment Gateway Settings</h3>
  <form action=""  method="post">
    <div class="form-group">
      <input type="hidden" name="gtid" value="<?php echo $settings->gtid?>" >
      <label>Gateway</label>
      <input class="form-control" type="text" name="gateway" placeholder=" Title of Site" value="<?php echo $settings->gateway?>">
    </div>
    
    <div class="form-group"><label>Secret Key</label>
      <input class="form-control" type="text" name="secret_key" value="<?php echo $settings->secret_key?>">
    </div>

    <div class="form-group"><label>public Key</label>
      <input class="form-control" type="text" name="public_key" value="<?php echo $settings->public_key?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success"  name="save"  value="save">
    </div>
   
  </form>
</div>



