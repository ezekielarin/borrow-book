 <!-- Scroll - horizontal and vertical table -->
                <section id="horizontal-vertical">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo $units_stud->first_name?><span> </span><?php echo $units_stud->last_name?>  <span>  Level:<?php echo $units_stud->level?></span></h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                <form method="post" action="">
                                   <select>
                                       <option value="1">Approve</option>
                                       <option value="2">Disapprove</option>
                                   </select>
                                   <input type="submit" name="approval" value="submit">
                               </form>
                                        <div class="table-responsive">
                                            <table class="table nowrap scroll-horizontal-vertical">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Title</th>
                                                        <th>Credit Unit</th>
                                                   
                                                    </tr>
                                                </thead>
                                                <tbody id="tabledata">
                                                    <?php 
                                                  //  print_r($courses);
                                                       if ($courses) {
                                                          foreach ($courses as $key => $value) {
                                                            ?>
                                                    <tr>
                                                        <td><?php echo $value->course_code?></td>
                                                        <td><?php echo $value->course_title?></td>
                                                        <td><?php echo $value->credit_unit?></td>
                                                        
                                                        <td></td>
                                                    </tr>

                                                    <?php
                                                          }
                                                       }
                                                    ?>
                                                    <tr>
~                                                        <td></td>
                                                        <td>Total Units</td>
                                                        <td><?php echo $units_stud->total_units?></td>
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
                <!--/ Scroll - horizontal and vertical table -->


<script type="text/javascript">
   loadlist();
    function loadlist() {

        
        $.get("/admin/registration/ajax_stud/",function(data,status) {
            document.getElementById('tabledata').innerHTML = "";
           
           console.log(status);
           console.log(data);
           st = JSON.parse(data);
           for (var i = 0; i<st.length; i++) {
               
               var output = "<tr><td>"+st[i].first_name+"</td><td>"+st[i].last_name+"</td><td>"+st[i].reg_num+"</td><td>"+st[i].level+"</td></tr>";
               document.getElementById('tabledata').innerHTML += output;
           }
        });

    }
</script>