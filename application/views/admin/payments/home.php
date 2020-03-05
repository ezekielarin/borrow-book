<!-- Table head options start -->
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payments</h4>
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
                                <h4 class="card-title"> Level<span> </span></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   
                                </div>
                                <div class="table">
                                    <table class="table mb-0">
                                        <thead>

                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Reg num</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Amount (NGN)</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                               if ($payments) {
                                                 foreach ($payments as $key => $value) {
                                                     ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?php echo $value->reg_num?></td>
                                                        <td><?php echo $value->email?></td>
                                                        <td><?php echo $value->amount?></td>
                                                        <td><?php echo $value->status?></td>
                                                        
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
       

                <!-- Table head options start -->
                