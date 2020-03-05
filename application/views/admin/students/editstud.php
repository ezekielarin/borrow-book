<!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Student</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div>
                                            <div class="card-profile">
                                                <img src="/uploads/profiles/<?php echo $student->photo?>" height="220" width="180">
                                            </div>
                                            <p><?php echo $error['error']?></p>
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <input type="hidden" name="student_id" value="<?php echo $student->sid?>">
                                                <label>upload photo</label>
                                                <input type="file" name="profilephoto">
                                                <input type="submit" name="updatephoto" value="upload">
                                            </form>
                                        </div>
                                        <form class="form" action="" method="post">
                                            <input type="hidden" name="student_id" value="<?php echo $student->sid ?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="first-name-column">First Name</label>
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="first_name" value="<?php echo $student->first_name ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="last-name-column">Last Name</label>
                                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo $student->last_name ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="city-column">State/LGA</label>
                                                            <input type="text" id="city-column" class="form-control" placeholder="Plateau/jos-north" name="state_lga" value="<?php echo $student->state_lga ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="country-floating">Country</label>
                                                            <input type="text" id="country-floating" class="form-control" name="country" placeholder="Country" value="<?php echo $student->country ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"><label for="address">Address</label>
                                                            <input type="text" id="address" class="form-control" name="address" placeholder="Address" value="<?php echo $student->address ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group"> <label for="email-id-column">Level</label>
                                                            <input type="text" id="email-id-column" class="form-control" name="level" placeholder="Level" value="<?php echo $student->level ?>">
                                                           
                                                        </div>
                                                    </div>

                                
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id">Email</label>
                                                            <input type="text" id="email-id" class="form-control" name="email" placeholder="Email" value="<?php echo $student->email ?>">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Entry Mode</label>
                                                            <select class="form-control" name="entry_mode">
                                                                <option disabled="default" >--mode of Entry--</option>
                                                                <option value="utme" >UTME</option>
                                                                <option value="directentry">Direct Entry</option>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Gender: </label>
                                                            <input type="radio" name="gender" value="male"><span> Male</span>
                                                            <input type="radio" name="gender" value="female"><span> Female</span>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control" name="country">
                                                                <option disabled="default" >--Select Country--</option>
                                                                <option value="nigeria" >Nigeria</option>
                                                                <option value="ghana">Ghana</option>
                                                                <option value="cameroun">Cameroun</option>
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <select class="form-control" name="department">
                                                                <option value="<?php echo $student->department_id?>"><?php echo $student->department ?></option>
                                                                
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
                                                            <input type="date" class="form-control" name="dob" value="<?php echo $student->date_of_birth?>">
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