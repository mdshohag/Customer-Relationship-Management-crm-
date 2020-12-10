<?php
include_once('include/header.php');

 $data = $cls_client->view_client_data();
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
                            <a href="clients_manage_print.php"  class="btn btn-danger" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Print </a>             
					  </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Client Name</th>
                                        <th>Number</th>
                                        <th>Contact Person</th>
                                        <th>Number</th>
                                        <th>File id</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                       <?php 
									   function getcolour($catc) { 
											switch($catc) 
											{ 
												case complete: 
													return 'btn-success'; 
													break; 
												case waiting: 
													return 'btn-warning'; 
													break; 
												case pending: 
													return 'btn-danger'; 
													break; 
												case running: 
													return 'btn-primary'; 
													break; 
												default: 
													return 'btn-default'; 
													break; 
											} 
										} 
					   while($row = $data->fetch_assoc()){

							 $catc = $row["status"];
					   ?>
							<tr class="odd gradeX">
								<td style="text-align:center"><?php echo $row['id']; ?></td>
								<td style="text-align:center"><?php echo $row['client_name']; ?></td>
								<td style="text-align:center"><?php echo $row['client_number']; ?></td>
								
								<td style="text-align:center"><?php echo $row['contact_persoin']; ?></td>
								<td style="text-align:center"><?php echo $row['contact_persoin_number']; ?></td>
								<td style="text-align:center"><?php echo $row['file_id']; ?></td>
								<td style="text-align:center"><button class="btn <?php echo getcolour($catc); ?>"><?php echo ucfirst($catc); ?></button></td>
								
								
								<td style="text-align:center"><a class="btn btn-info" href="client_edite.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
								
							</tr>
						<?php } ?>
                                    
                                    
                                </tbody>
                            </table>
                           
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
<?php
include_once('include/footer.php');
 ?>
