<?php include('includes/header.php');?>
<?php

if(isset($_SESSION['admin']))
{
    $id=$_GET['vid'];
	?>
        <div class="page db-modern">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content">
            <?php include('includes/navbar.php');?>
                <div class="content-inner boxed mt-4 w-100">
                    <div class="container">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
                                <a href="dashboard.php">Dashboard</a> &nbsp;/&nbsp; 
                                    <a href="manage_vendor.php"> Manage Vendor</a>&nbsp;/&nbsp;
                                        <a href="edit_vendor.php?vid=<?php echo $id;?>" style="color:red" class="page-header-title">Edit Vendor</a>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Example 01 -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4></h4>
                                    </div>
								<form role="form" method="post" action="../controller/editprocess_master.php">
                                    <div class="widget-body">
                                        <div class="table-responsive">
											<table class="table mb-0" style="color:black">
                                            <?php
													$id=$_GET['vid'];
													$sql="SELECT * FROM tbl_vendor where vendor_id=$id";
													$result = $connect->query($sql);
													while($row=$result->fetch_array())
													{														 
											?>
											        <tr>
                                                        <td align="center">ID</td>
                                                        <td><div class="form-group"><?php echo $row['vendor_id'];?><input name="vendor_id" type="hidden" value="<?php echo $row['vendor_id']; ?>"></div></td>
											        </tr>
                                                    <tr align="center">
                                                        <td>Vendor Name</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="user_name" value="<?php echo $row['name'];?>" name="user_name" onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Name of Venue Holder" required autofocus onblur="onLeave()">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                  
                                                    <tr align="center">
                                                        <td>Mobile Number</td>
                                                        <td><div class="form-group">
                                                            <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" id="number" data-max=10 oninput="showfocus(this)"class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="validate()" onkeypress="return isNumberKey1(event)"required>
                                                             <input type=hidden id="mobile" value="<?php echo $mobile;?>">
                                                    </div></td>
                                                    </tr>
                                                  
                                                    <tr align="center">
                                                        <td>Email</td>
                                                        <td> <div class="form-group">
                                                             <input type="email" class="form-control" id="email" value="<?php echo $row['email'];?>" name="email"  placeholder="Enter Email" required autofocus >
                                                         </div></td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>Address</td>
                                                        <td><div class="form-group">
                                                            <textarea required class="form-control" name="address" placeholder="Enter Address" autofocus><?php echo $row['address'];?></textarea>
                                                    </div></td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>Status</td>
                                                        <td><div class="form-group">
                                                        <select id='status' name='status' class="form-control" >
                                                        <option  value="<?php echo $row['status'];?>"> <?php echo $row['status'];?></option>
                                                        <?php
                                                            if($row['status'] =="Active"){
                                                            ?>
                                                            <option  value="Deactive">Deactive</option>
                                                        <?php } else
                                                        {
                                                        ?>
                                                            <option  value="Active">Active</option>
                                                        <?php }?>
                                                    </select>
                                                    </div></td>
                                                    </tr>
                                                     <tr align="center">
                                                     <td colspan="2"><center><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="btnUpdatevendor" value="Update">
                                                                </div>
                                                    </center></td>											       
													</tr>
													<?php }?>
											</table>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <?php include('includes/footer.php');?>
    <?php
        }
        else
        {	
            echo"<script> alert('You Must Login First')</script>";
            echo "<script>window.location.href='../Admin/index.php';</script>";	
        }
    ?>