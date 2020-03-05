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

                
                 <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php //echo $courses->level ?> Level <span> <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                                Add New
                                            </button>  </span></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   
                                </div>
                                <div class="table-responsive">
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
                                                        <th scope="row"></th>
                                                        <td><?php echo $value->course_code?></td>
                                                        <td><?php echo $value->course_title?></td>
                                                        <td><?php echo $value->credit_unit?></td>
                                                        <td><?php echo $value->semester?></td>
                                                        
                                                    </tr>

                                             <?php
                                                 }
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

         
  <!-- Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add Course</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <input type="hidden" name="level_id" value="<?php echo $level_id?>">
                    <input type="hidden" name="department_id" value="<?php echo $user->department_id?>">
                                   
                    <div class="modal-body">
                        <label>Course Code: </label>
                        <div class="form-group">
                            <input  name="course_code" placeholder="EE300" class="form-control">
                        </div> 
                        <label>Course Title: </label>
                        <div class="form-group">
                            <input  name="course_title" placeholder="course Title" class="form-control">
                        </div> 
                        <label>Credit Unit: </label>
                        <div class="form-group">
                            <input  name="credit_unit" placeholder="8" class="form-control">
                        </div> 
                        <label>Semester: </label>
                        <div class="form-group">
                            <select name="semester" class="form-control">
                                <option value="first">First Semester</option>
                                <option value="second">Second Semester</option>
                            </select>
                            
                        </div> 
                        
                                                                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="addnew" class="btn btn-primary" >Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

                