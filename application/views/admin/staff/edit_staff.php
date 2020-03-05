<!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit staff</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div>
                                            <div class="card-profile">
                                                <img src="/uploads/profiles/<?php echo $staff->photo?>" height="220" width="180">
                                            </div>
                                            <p><?php echo $error['error']?></p>
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <input type="hidden" name="staff_id" value="<?php echo $staff->uid?>">
                                                <label>upload photo</label>
                                                <input type="file" name="profilephoto">
                                                <input type="submit" name="updatephoto" value="upload">
                                            </form>
                                        </div>
                                        <form class="form" action="" method="post">
                                            <input type="hidden" name="staff_id" value="<?php echo $staff->uid ?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="first-name-column">First Name</label>
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="first_name" value="<?php echo $staff->first_name ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="last-name-column">Last Name</label>
                                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo $staff->last_name ?>">
                                                            
                                                        </div>
                                                    </div>
                                                                                              
                                
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id">Email</label>
                                                            <input type="text" id="email-id" class="form-control" name="email" placeholder="Email" value="<?php echo $staff->email ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            
                                                            <label>Role</label>
                                                            <select class="form-control" name="role">
                                                                <option disabled="default" >--Choose Staff Role--</option>
                                                                <option value="<?php echo $staff->role?>" ><?php echo $staff->role_name?></option>
                                                                <?php
                                                                print_r($staff);
                                                                  $roles = $this->db->query("SELECT * FROM user_roles")->result(); 
                                                                  foreach ($roles as $key => $value) {
                                                                     ?>
                                                                     <option value="<?php echo $value->urid?>" ><?php echo $value->role_name;?></option>

                                                                <?php
                                                                  }
                                                                ?>
                                                                
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Gender: </label>
                                                            <select name="gender" class="form-control">
                                                                <option value="<?php echo $staff->gender?>"><?php echo $staff->gender?></option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <select class="form-control" name="department_id">
                                                                <option value="<?php echo $staff->department_id?>"><?php echo $staff->department ?></option>
                                                                
                                                                <option disabled="default" >--Department--</option>
                                                                <?php
                                                                   $query = $this->db->query("SELECT * FROM departments  ")->result();
                                                                   foreach ($query as $key => $value) {   
                                                                ?>
                                                                <option value="<?php echo $value->id?>">
                                                                    <?php echo $value->department?> 
                                                                </option>
                                                                <?php 
                                                                   }
                                                                ?>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label>Date of Birth</label>
                                                            <input type="date" class="form-control" name="dob" value="<?php echo $staff->dob?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <button type="submit" name="update" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->