<?php
include_once('include/header.php');
 ?>
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Projects Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Project Add form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="projects_add">
                                        
                                        <div class="form-group">
                                            <label>Project Name:</label>
                                            <input name="p_name" class="form-control" type="text" placeholder="Enter Project Name" required>
                                        </div> 
 <div class="form-group">
                                            <label>Project Category: </label>
                                            <select name="p_category" class="form-control">
                                                <option value="">Select</option>
                                                <option value="website">Website</option>
                                                <option value="software">Software</option>
                                                <option value="mobileapps">Mobile Apps</option>
                                                <option value="dmarketing">Digital Marketing</option>
                                            </select>
                                        </div> 
										<div class="form-group">
                                            <label>Project Description: </label>
											<textarea rows="4" class="form-control" name="p_des" required></textarea>
                                            
                                        </div>
										<div class="form-group">
                                            <label>Project Location:</label>
                                            <input name="p_location" type="text" class="form-control" required placeholder="Enter Project Location">
                                        </div>
									
                                      
                                        <button type="submit" class="btn btn-success">Submit </button>
                                        <button type="reset" class="btn btn-warning">Reset </button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
include_once('include/footer.php');
 ?>
