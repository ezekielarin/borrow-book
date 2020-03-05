
<link rel="stylesheet" type="text/css" href="/assets/dashboard/vendors/css/tables/datatable/datatables.min.css">
<!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List of all Levels</h4>
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
                                                        <th>Levels</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                       foreach ($levels as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value->level?></td>
                                                            <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></td>
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
                                                            <h4 class="modal-title" id="myModalLabel33">Add Assignment</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="" method="post">
                                                          
                                                          
                                                            <div class="modal-body">
                                                                <label>Level: </label>
                                                                <div class="form-group">
                                                                    <input  name="level" placeholder="200" class="form-control">
                                                                </div> 
                                                                                                                   
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="addlevel" class="btn btn-primary" >Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

<!-- END: Page Vendor JS-->