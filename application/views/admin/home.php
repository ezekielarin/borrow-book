            <div class="content-wrapper">
                  <section id="dashboard-analytics">
                    <div class="row">
                    
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                   
                                    <h2 class="text-bold-700 mt-1 mb-25"><?php echo $total_students->total_students ?></h2>
                                    <p class="mb-0">Total Students</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    
                                    <h2 class="text-bold-700 mt-1 mb-25"><?php echo $total_departments->total_depts?></h2>
                                    <p class="mb-0">Departments</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    
                                    <h2 class="text-bold-700 mt-1 mb-25"><?php echo $total_reg->total_reg ?></h2>
                                    <p class="mb-0">Registrations</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                0
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Number of Departments by faculties</h4>
                                </div>

                                <div class="card-content">
                                    <div class="card-body">
                                <?php 


                                   $depts = $total_departments->total_depts;

                                   foreach ($faculties as $key => $value) {
                                    $perc = ($value->no_depts/$depts)*100;
                                     ?>
                                     <div class="d-flex justify-content-between mb-25">
                                            <div class="browser-info">
                                                <p class="mb-25"><?php echo $value->faculty?></p>
                                                <h4><?php echo $value->no_depts?></h4>
                                            </div>
                                      
                                        </div>
                                        <div class="progress progress-bar-primary mb-2">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $perc?>" aria-valuemin="<?php echo $perc?>" aria-valuemax="100" style="width:<?php echo $perc?>%"></div>
                                        </div>

                                     <?php
                                   }
                                ?>
                                
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Students according to Faculties</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                <?php 
                              //  print_r($students);
                                   $total = $total_students->total_students;
                                   foreach ($students as $key => $value) {
                                       $percentage = ($value->total_students/$total)*100;
                                     ?>
                                     <div class="d-flex justify-content-between mb-25">
                                            <div class="browser-info">
                                                <p class="mb-25"><?php echo $value->faculty?></p>
                                                <h4><?php echo $value->total_students?></h4>
                                            </div>
                                            
                                        </div>
                                        <div class="progress progress-bar-primary mb-2">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentage?>" aria-valuemin="<?php echo $percentage?>" aria-valuemax="100" style="width:<?php echo $percentage?>%"></div>
                                        </div>

                                     <?php
                                   }
                                ?>
                                
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
