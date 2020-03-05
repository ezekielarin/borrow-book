
<!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List of all Staff</h4>
                                    <a class="btn btn-outline-success" href="/admin/staff/newstaff/" >
                                                Add New
                                            </a>
                                </div>
                               
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text"></p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                       foreach ($staff as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value->first_name?></td>
                                                            <td><?php echo $value->last_name?></td>
                                                            <td><?php echo $value->email?></td>
                                                            
                                                            <td><a href="/admin/staff/vw/<?php echo $value->uid?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></td>
                                                       </tr>


                                                     <?php
                                                        } 
                                                     ?>
                                                    
                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

 