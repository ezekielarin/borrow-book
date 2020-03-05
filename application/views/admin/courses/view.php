   

                                         <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                                Add New
                                            </button>
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