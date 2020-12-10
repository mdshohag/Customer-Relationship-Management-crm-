<?php
include_once('include/header.php');
$datas = $cls_project_info->projects_list();
$clients = $cls_client->clients_shortinfo();
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
                                    <form role="form" id="projects_assign">
                                        
                                        <div class="form-group">
                                            <label>Project Name:</label>
                                            <select name="p_name" class="form-control" required>
												<option value="">Select</option>
												<?php while($row = $datas->fetch_assoc()){ ?>
												<option value="<?php echo $row['id'] ?>"><?php echo $row['project_name'] ?></option>
												<?php } ?>
											</select>
                                        </div> 
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
                                            <label>Amount:</label>
                                            <input name="amount" type="text" class="form-control" required placeholder="Enter Amount" required>
                                        </div>
										<div class="form-group">
                                            <label>Issue Date:</label>
                                            <input name="issue_date" type="date" class="form-control" required placeholder="Enter Issue Date">
                                        </div>
										<div class="form-group">
                                            <label>Delivery Date:</label>
                                            <input name="delivery_date" type="date" class="form-control" required placeholder="Enter Delivery Date">
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
