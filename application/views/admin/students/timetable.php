
<link rel="stylesheet" type="text/css" href="/assets/dashboard/vendors/css/tables/datatable/datatables.min.css">
<!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List of all Students</h4>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                                Add New
                                            </button>
                                        </div>
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
                                                        <th>Reg Number</th>
                                                        <th>Date of Birth</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                       foreach ($students as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $value->first_name?></td>
                                                            <td><?php echo $value->last_name?></td>
                                                            <td><?php echo $value->email?></td>
                                                            <td><?php echo $value->reg_num?></td>
                                                            <td><?php echo $value->date_of_birth?></td>
                                                            <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></td>
                                                       </tr>


                                                     <?php
                                                        } 
                                                     ?>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>Reg Number</th>
                                                        <th>Date of Birth</th>
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
                                                                <label>Type the assignment: </label>
                                                                <div class="form-group">
                                                                    <textarea  name="content" placeholder="assignments" class="form-control"></textarea>
                                                                </div> 
                                                                <label>Submission Date: </label>
                                                                <div class="form-group">
                                                                    <input type="date" name="submission_time"  class="form-control">
                                                                </div>                                                   
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="add_assignment" class="btn btn-primary" >Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

<!-- END: Page Vendor JS-->