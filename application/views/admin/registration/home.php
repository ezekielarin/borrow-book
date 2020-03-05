 <!-- Scroll - horizontal and vertical table -->
                <section id="horizontal-vertical">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Title</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                      
                                            <select  >
                                                <option value="100">All</option>
                                                <option value="100">100</option>
                                                <option value="100">200</option>
                                                <option value="100">300</option>
                                            </select>
                                            <input type="text" name="" placeholder="enter name or reg number">
                                            <input type="submit" name="" value="search" >
                                          
                                        </form>
                                      
                                        <div class="table-responsive">
                                            <table class="table nowrap scroll-horizontal-vertical">
                                                <thead>
                                                    <tr>
                                                        <th>First name</th>
                                                        <th>Last name</th>
                                                        <th>Reg Number</th>
                                                        <th>Level</th>
                                                        <th>Reg Status</th>
                                                        <th>Action</th>
                                                   
                                                    </tr>
                                                </thead>
                                                <tbody id="tabledata">
                                                    <?php 
                                                       if ($courses) {
                                                          foreach ($courses as $key => $value) {
                                                            ?>
                                                    <tr>
                                                        <td><?php echo $value->first_name?></td>
                                                        <td><?php echo $value->last_name?></td>
                                                        <td><?php echo $value->reg_num?></td>
                                                        <td><?php echo $value->level?></td>
                                                        <td><span class="badge badge-warning">pending </span> </td>
                                                        <td><a href="/admin/registration/vw/<?php echo $value->student_id?>"><i class="fa fa-eye"></i></a></td>
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