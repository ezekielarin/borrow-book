<!-- Table head options start -->
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $user->department?></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->

                <?php 
                $dept_id = $user->department_id;
                  $levels = $this->db->query("SELECT * FROM levels")->result();
                  foreach ($levels as $key => $lv) {
                     $courses = $this->db->query("SELECT * FROM courses WHERE level_id='$lv->lid' AND  department_id='$dept_id'")->result();
                    

                     ?>
                 <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $lv->level ?> Level<span> <a href="/admin/courses/level/<?php echo $lv->lid?>"><i class="fa fa-edit"></i>Edit</a> </span></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   
                                </div>
                                <div class="table">
                                    <table class="table mb-0">
                                        <thead>

                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Course Code</th>
                                                <th scope="col">Course Title</th>
                                                <th scope="col">Credit Units</th>
                                                <th scope="col">Semester</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                               if ($courses) {
                                                 foreach ($courses as $key => $value) {
                                                     ?>
                                                    <tr>
                                                        
                                                        <td><?php echo $value->course_code?></td>
                                                        <td><?php echo $value->course_title?></td>
                                                        <td><?php echo $value->credit_unit?></td>
                                                        <td><?php echo $value->semester?></td>
                                                        
                                                    </tr>


                                                     <?php
                                                 
                                               }
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       

                
                <!-- Table head options end -->

                     <?php
                   }
                  }

                ?>
                <!-- Table head options start -->
                