<?php
include_once('include/header.php');
 ?>
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Client Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Client Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="client_add">
                                        
                                        <div class="form-group">
                                            <label>Client Name:</label>
                                            <input type="text" name="cli_name" class="form-control" placeholder="Enter Client Name">
                                        </div> 
                                        <div class="form-group">
                                            <label>Client Mob/Pho:</label>
                                            <input type="text" name="cli_number" class="form-control" placeholder="Enter Mob/Pho Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Client Email:</label>
                                            <input name="cli_email" type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person Name:</label>
                                            <input type="text" name="cont_pesrsion" class="form-control" placeholder="Enter Contact Persoin Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person Mob/Pho:</label>
                                            <input type="text" name="cont_number" class="form-control" placeholder="Enter Mob/Pho Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person Email:</label>
                                            <input name="cont_email" type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                         <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option>Select</option>
                                                <option value="waiting">Waiting</option>
                                                <option value="pending">Pending</option>
                                                <option value="running">Running</option>
                                                <option value="complete">Complete</option>
                                                 <option value="cancel">Cancel</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>File id</label>
                                            <input type="text" name="file_id" class="form-control" placeholder="Enter File Id Number ">
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
