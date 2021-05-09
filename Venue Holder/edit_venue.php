<?php include('includes/header.php');?>
        <div class="page db-social albums">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            <?php include('includes/navbar.php');?>
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="page-header-title">Edit Details</h2>                                       
                                    </div>
                                </div> 
                               <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width:1100px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                        <form role="form" method="post" action="../controller/editprocess_master.php">
                                        <div class="widget-body">
                                            <div class="table-responsive">
                                        <table class="table mb-0" style="color:black">
                                                <?php                                           
                                             $id=$_SESSION['venue_id'];
                                            $sql="SELECT * FROM venue_details where venue_id=$id";
                                            $result = $connect->query($sql);
                                            while($row=$result->fetch_array())
                                            {
                                                    
                                        ?>
                                            <tr>
                                                <td align="center"> Vendor ID</td>
                                                <td><div class="form-group"><?php echo $row['venue_id'];?><input name="venue_id" type="hidden" value="<?php echo $row['venue_id']; ?>"></div></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Description</td>
                                                <td>
                                                    <div class="form-group">
                                                    <textarea required class="form-control" name="venue_info" placeholder="Venue Description" value="<?php echo $row['venue_info']; ?>" autofocus><?php echo $row['venue_info']; ?></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td>Seating Capacity</td>
                                                <td><div class="form-group">
                                                <input type="text" class="form-control" id="seating_capacity"  value=" <?php echo $row['seating_capacity'];?>" name="seating_capacity" onkeypress="return isNumberKey1(event)" placeholder="Count of seating capacity" required autofocus>
                                                </div></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Chair Count</td>
                                                <td><div class="form-group">
                                                <input type="text" class="form-control" id="chair" name="chair" required onkeypress="return isNumberKey1(event)" placeholder="Number of Chair"  value=" <?php echo $row['chair'];?>">

                                            </div></td>
                                            </tr>
                                            <tr align="center">
                                                <td>Accommodation</td>
                                                <td> <div class="form-group">
                                                <input type="text" class="form-control" id="room" name="room" required onkeypress="return isNumberKey1(event)" placeholder="Number of Room" value=" <?php echo $row['room'];?>">
                                                    </div></td>
                                            </tr>
                                            <tr >
                                                <td align="center">Others Facilities</td>
                                                <td> Parking:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="parking" id="parking" checked value="<?php echo $row['parking'];?>" checked>&nbsp;<?php echo $row['parking'];?>
                                                </label> 
                                               
                                                    <?php if($row['parking']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"name="parking" value="No" id="parking" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="parking" id="parking" value="Yes">&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
                                                    <br>Drinking Water:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="water" id="water" checked value="<?php echo $row['drink_water'];?>">&nbsp;<?php echo $row['drink_water'];?>
                                                </label> 
                                               
                                                    <?php if($row['drink_water']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"name="water" value="No" id="catering" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="water" id="water" value="Yes">&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
                                                    <br>Catering:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="catering" id="catering" checked value="<?php echo $row['catering'];?>">&nbsp;<?php echo $row['catering'];?>
                                                </label> 
                                               
                                                    <?php if($row['catering']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio" name="catering" value="No" id="catering" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="catering" id="catering" value="Yes">&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
                                                     <br>Decoration:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="decoration" id="catering" checked value="<?php echo $row['catering'];?>">&nbsp;<?php echo $row['catering'];?>
                                                </label> 
                                               
                                                    <?php if($row['decoration']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio" name="decoration" value="No" id="decoration" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="decoration" id="decoration" value="Yes">&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
                                                     <br>Sound System:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="sound" id="sound" checked value="<?php echo $row['sound_system'];?>">&nbsp;<?php echo $row['sound_system'];?>
                                                </label> 
                                               
                                                    <?php if($row['sound_system']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio" name="sound" value="No" id="sound" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="sound" id="sound" value="Yes" >&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
                                                     <br>AC/Fan:
                                                <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="fan" id="fan" checked value="<?php echo $row['ac_fan'];?>">&nbsp;<?php echo $row['ac_fan'];?>
                                                </label> 
                                               
                                                    <?php if($row['ac_fan']=="Yes")
                                                    {
                                                        echo '<label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio" name="fan" value="No" id="fan" >&nbsp;No
                                                            </label>  ';
                                                    }
                                                    else{
                                                        echo ' <label class="radio-inline">
                                                        &nbsp;&nbsp;&nbsp;<input type="radio"  name="fan" id="fan" value="Yes" >&nbsp;Yes
                                                </label> ';
                                                    }
                                                    ?>
												    </td>
                                            </tr>
                                                <tr align="center">
                                                <td colspan="2"><center><div class="form-group"><input type="submit" class="btn btn-md btn-primary"  name="btnUpdateservice" value="Update">
                                                        </div>
                                            </center></td>											       
                                            </tr>
                                            <?php } ?>
                                                </table>

                                            </div>
                                        </div>
                                 </form>
                                </div>
                                <!-- End Sorting -->
                            </div>
                         </div>    
                        
                        <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <?php include('includes/footer.php');?>
                
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        </body> 
</html>