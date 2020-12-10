<?php
include_once('include/header.php');
$datas = $cls_project_info->projects_list();
 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Projects</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" id="p_list">
                        <div class="panel-heading">
                            Manage Projects
                        </div>
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Project Name</th>
<th> Category</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
								$i = 1;
function category($data){
                                    switch($data){
                                        case 'website':
                                            return "Website";
                                            break;
                                        case 'software':
                                            return "Software";
                                            break;
                                        case 'mobileapps':
                                            return "Mobile Apps";
                                            break;
                                        case 'dmarketing':
                                            return "Digital Marketing";
                                            break;
                                        default:
                                            return "";
                                            break;
                                    }
                                }
								while($row = $datas->fetch_assoc()){ ?>
                                    <tr class="odd gradeX" id="p_list_<?php echo $row['id'] ?>">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['project_name'] ?></td>
<td><?php echo category($row['p_category']); ?></td>
                                        <td><?php echo $row['p_description'] ?></td>
                                        <td class="center"><?php echo $row['project_location'] ?></td>
                                        <td class="center" style="width: 14%;">
<button class="btn btn-info"><i class="fa fa-search-plus" aria-hidden="true"></i></button> <button class="btn btn-primary p_edit_btn" p_id="<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>
                                    </tr>
								<?php } ?>
                                    
                                </tbody>
                            </table>
                           
							</div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <div class="panel panel-default" id="p_edit_form" style="display:none;">
                        <div class="panel-heading">
                            Project Add form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="projects_edit">
                                        
                                        <div class="form-group">
                                            <label>Project Name:</label>
                                            <input name="p_name" class="form-control" type="text" placeholder="Enter Project Name" required>
                                             <input name="pid" class="form-control" type="hidden" required>
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
                                    
                                      
                                        <button type="submit" class="btn btn-success">Update </button>
                                        <button type="reset" class="btn btn-warning">Reset </button>
                                        <button type="button" class="btn btn-danger" id="p_edit_cancel">Cancel </button>
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
            
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
include_once('include/footer.php');
 ?>
