<?php
include_once('include/header.php');
$datas = $cls_contact_schedule->contact_list();
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Contact Schedule</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Contact
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Client Name</th>
                                        <th>Employee Name</th>
                                        <th>Description</th>
                                        <th>Schedule Date</th>
<th>Contact Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$i = 1;
								while($row = $datas->fetch_assoc()){ ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['client_name'] ?></td>
                                        <td><?php echo $row['emp_name'] ?></td>
                                        <td class="center"><?php echo $row['description'] ?></td>
                                        <td class="center"><?php 
                    $std_date = date("d-m-y", strtotime($row['schedule_date']));
                    echo (($row['schedule_date'] != '0000-00-00')?$std_date:''); ?></td>
<td class="center"><?php echo date('d-m-y',strtotime($row['contact_date'])); ?></td>
                                        <td class="center" style="width: 14%;">
<button class="btn btn-info"><i class="fa fa-search-plus" aria-hidden="true"></i></button> <button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
