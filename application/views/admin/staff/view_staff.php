
<link rel="stylesheet" type="text/css" href="/assets/dashboard/vendors/css/tables/datatable/datatables.min.css">
<!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">staff</h4>
                                    <a href="/admin/staff/edit?sfid=<?php echo $staff->uid?>" class="btn">Edit <i class="fa fa-edit"></i> </a>

                                </div>

                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="card-profile">
                                             <img src="/uploads/profiles/<?php echo $staff->photo?>" height="200" width="150">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                            
                                                <tbody>
                                                   
                                                        <tr>
                                                            <th>Name: </th><td><?php echo $staff->first_name?><span> </span><?php echo $staff->last_name?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email: </th><td><?php echo $staff->email?></td>
                                                        </tr>
                                                        
                                                        
                                                       <tr>
                                                           <th>Address: </th><td><?php echo $staff->address?></td>
                                                       </tr>
                                                      
                                                       <tr>
                                                          <th>Department: </th><td><?php echo $staff->department?></td>
                                                       </tr>


                                                
                                                    
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
                                 