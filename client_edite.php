<?php
	include_once('include/header.php');
	$update_id = $_GET['edit'];
	
	$data = $cls_client->client_update_by_id($update_id);
	
	$row = $data->fetch_assoc(); 
 ?>
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Client Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Update Client Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="client_update">
                                        
                                        <div class="form-group">
                                            <label>Client Name:</label>
                                            <input type="text" value="<?php echo $row['client_name']; ?>" name="cli_name" class="form-control">
											<input type="hidden" value="<?php echo $row['id']; ?>" name="client_id">
										<div class="form-group">
                                            <label>Client Mob/Pho:</label>
                                            <input type="text" value="<?php echo $row['client_number']; ?>" name="cli_number" class="form-control" >
                                        </div>
										<div class="form-group">
                                            <label>Client Email:</label>
                                            <input value="<?php echo $row['client_email']; ?>" name="cli_email" type="email" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Contact Person Name:</label>
                                            <input type="text"  value="<?php echo $row['contact_persoin']; ?>" name="cont_pesrsion" class="form-control" >
                                        </div>
										<div class="form-group">
                                            <label>Contact Person Mob/Pho:</label>
                                            <input type="text" value="<?php echo $row['contact_persoin_number']; ?>" name="cont_number" class="form-control">
                                        </div>
										<div class="form-group">
                                            <label>Contact Person Email:</label>
                                            <input name="cont_email" value="<?php echo $row['contact_persoin_email']; ?>" type="email" class="form-control">
                                        </div>
										 <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="<?php echo $row['status']; ?>"> <?php echo $row['status']; ?></option>
                                                <option value="waiting">Waiting</option>                                              
                                                <option value="pending">Pending</option>
                                                <option value="running">Running</option>
                                                <option value="complete">Complete</option>
                                                <option value="cancel">Cancel</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>File id</label>
                                            <input type="text" value="<?php echo $row['file_id']; ?>" name="file_id" class="form-control">
                                        </div>
										<input type="submit" class="btn btn-success" value="Submit">
                                        <button type="reset" class="btn btn-warning">Reset Button</button>
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
