<?php

	include_once('include/header.php');

 ?>
            

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Info Add Form 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" id="user_add">
                                        
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Employee Id:</label>
                                            <input type="text" name="emp_id" class="form-control" placeholder="Enter Employee Id">
                                        </div>
										<div class="form-group">
                                            <label>Department</label>
                                            <select name="department" class="form-control">
                                                <option>Select</option>
												<option value="administration">Administration</option>
                                                <option value="accounts">Accounts</option>
                                                <option value="software">Software</option>
                                                <option value="android">Android</option>
                                                <option value="others">Others</option>
                                               
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>designation</label>
                                            <select name="designation" class="form-control">
                                                <option>Select</option>
                                                <option value="crm">Chairman</option>
                                                <option value="md">Managing Director</option>
                                                <option value="ad">Asst. Director</option>
                                                <option value="mhr">Manager (HR & Admin)</option>
												<option value="offex">Office Executive</option>
                                                <option value="srexsoft">Sr. Executive (Software Department)</option>
												 <option value="jrexsoft">Jr. Executive (Software Department)</option>
												 <option value="jrsoft">Jr.(Software Department)</option>
                                                <option value="exapps">Executive (Apps Department)</option>
                                                <option value="jrapps">Jr. Executive (Apps Department)</option>
                                                <option value="account">Accounts Officer</option>
                                                <option value="styeng">System Engineer</option>
                                                <option value="uide">UI Designer</option>
                                                <option value="exout">Executive (Outsourcing)</option>
                                                <option value="cobude">Consultant & Business Development</option>
                                                <option value="exm">Executive (Marketing)</option>
                                                <option value="moff">Marketing Officer</option>
                                               
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>User Types</label>
                                            <select name="usertype" class="form-control">
                                                <option>Select</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Mobile:</label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <label> Email:</label>
                                            <input name="email" type="email" class="form-control" placeholder="Enter Email">
                                        </div>
										<div class="form-group">
                                            <label> Password:</label>
                                            <input name="pass" type="password" class="form-control" placeholder="Enter password">
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
