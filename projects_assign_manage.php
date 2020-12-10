<?php
include_once('include/header.php');
$datas = $cls_project_info->projects_assign_list();
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Assign Projects</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Assign Projects
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Project </th>
                                        <th>Client</th>
                                        <th>Issue Date</th>
                                        <th>Delivery Date</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$i = 1;
								while($row = $datas->fetch_assoc()){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['project_name'] ?></td>
                                        <td><?php echo $row['client_name'] ?></td>
                                        <td class="center"><?php echo $row['issue_date'] ?></td>
                                        <td class="center"><?php echo $row['delivery_date'] ?></td>
                                        <td class="center"><?php echo $row['project_progress'] ?></td>
                                        <td class="center"><button class="btn btn-info">View</button> <button class="btn btn-primary">Edit</button> 
										<button class="btn btn-danger">Delete</button>
										</td>
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
