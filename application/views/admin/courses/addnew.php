<!-- Table head options start -->
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $user->department?></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>list of courses</p>
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
                                                        <th scope="row">1</th>
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