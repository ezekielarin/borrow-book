

<link rel="stylesheet" type="text/css" href="/assets/dashboard/vendors/css/tables/datatable/datatables.min.css">
<!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo $faculty->faculty?></h4>
                                    <p class="card-title">Department:  <?php echo $department->department?></p>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                                Add New
                                            </button>
                                        </div>
                               
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text"></p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Title</th>
                                                        <th>Credit Unit</th>
                                                        <th>Semester</th>
                                                     
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                       foreach ($courses as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value->course_code?></td>
                                                            <td><?php echo $value->course_title?></td>
                                                            <td><?php echo $value->credit_unit?></td>
                                                            <td><?php echo $value->semester?></td>
                                                          
                                                            <td><a href="/admin/faculties/department/<?php echo $value->id?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></td>
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
                    </div>
                </section>
                <!--/ Zero configuration table -->
<!-- assignment -->
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
                                                           <input type="hidden" name="department_id" value="<?php echo $dept_id ?>">
                                                          
                                                          
                                                            <div class="modal-body">
                                                                <label>Course Code: </label>
                                                                <div class="form-group">
                                                                    <input  name="course_code" placeholder="Department" class="form-control">
                                                                </div> 
                  
                                                            
                                                                <label>Course Title: </label>
                                                                <div class="form-group">
                                                                    <input  name="course_title" placeholder="Department" class="form-control">
                                                                </div> 
                   
                                                                <label>Credit Unit: </label>
                                                                <div class="form-group">
                                                                    <input  name="credit_unit" placeholder="Department" class="form-control">
                                                                </div>

                                                                <label>Semester: </label>
                                                                <div class="form-group">
                                                                    <select  name="semester" class="form-control">
                                                                        <option value="first">First Semester</option>
                                                                        <option value="second">Second Semester</option>
                                                                    </select>
                                                                </div> 
                                                                <label>Level: </label>
                                                                <div class="form-group">
                                                                    <select  name="level" class="form-control">
                                                                        <option value="100">100 Level</option>
                                                                        <option value="200">200 Level</option>
                                                                    </select>
                                                                </div> 
                                                                                                                   
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="addcourse" class="btn btn-primary" >Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

<!-- END: Page Vendor JS-->