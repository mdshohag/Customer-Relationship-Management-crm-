<?php
include_once('include/header.php');
$datas = $cls_project_info->projects_list();
$clients = $cls_client->clients_shortinfo();
 ?>
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact Schedule Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Contact Info Add Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="contact_schedule">
                                        
										<div class="form-group">
                                            <label>Client Name:</label>
                                            <select name="client_name" class="form-control" required>
												<option value="">Select</option>
												<?php while($row = $clients->fetch_assoc()){ ?>
												<option value="<?php echo $row['id'] ?>"><?php echo $row['client_name'] ?></option>
												<?php } ?>
											</select>
                                        </div> 
										<div class="form-group">
                                            <label>Employee Name</label>
                                            <input name="emp_name" type="text" class="form-control" required placeholder="Enter Employee Name">
                                        </div>
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea rows="4" class="form-control" name="con_des" id="con_des" required=""></textarea>
										
                                        </div>
										
										<div class="form-group">
                                            <label>Schedule Date:</label>
                                            <div class="input-group">
                                             <input name="schedule_date" type="date" class="form-control"  placeholder="Enter Schedule Date">
                                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                            </div>
                                           
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
