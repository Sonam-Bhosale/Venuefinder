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
                                    <div class="d-flex align-items-center"><br> <a  href="#" style="color:red;font-size:18px">View Quotation Request</a>&nbsp;|&nbsp;
                                       <a  href="booking_request" style="color:black;font-size:18px">Quotation Request</a>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <?php 
                                $token=$_GET['token'];
                                $id=$_GET['id'];
                                $sql="select * from venue_enquires,register_user,register_venue where venue_enquires.user_id=register_user.user_id and venue_enquires.venue_id=register_venue.user_id and id='$id' and token='$token'"; 
                                $result=$connect->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        $rate=$row['quotation_rate'];
                                        $reply=$row['reply'];
                                ?>
                                    <div class="container">
                        <div class="bs-example">
                           
                            <form action="../controller/quotation_submit.php" method="post">
                                <table id="sorting-table" class="table mb-0">                                    
                                    <tbody style="color:black"> <input type="hidden" value="<?php echo $row['user_email']; ?>" name="email">
                                    <input type="hidden" value="<?php echo $id; ?>" name="qid">
                                    <input type="hidden" value="<?php echo $token; ?>" name="token">
                                            <tr>
                                                <td colspan="4"><h3 align="center"><?php echo $row['name']; ?></h3>
                                                <p align="center">Request for the quotation of your venue requirement are below,</p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"  align="right"><b>Event Name</b></td>
                                                <td align="right"><input type="text" name="event_name" value="<?php echo $row['event_name']; ?>" class="form-control" autofocus readonly></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"  align="right"><b>Requirement</b></td>
                                                <td align="right"><textarea  name="requirement" value="<?php echo $row['requirement'];?>" class="form-control" autofocus readonly><?php echo $row['requirement'];?></textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"  align="right"><b>Rate</b></td>
                                                <td align="right">
                                                    <?php if(isset($rate)>0){
                                                        ?>
                                                        <input type="nuber" id="rate" name="rate" value="<?php echo $rate;?>"  class="form-control" onkeypress="return isNumberKey1(event)" autofocus required></td>
                                                    <?php } else{?>
                                                        <input type="nuber" id="rate" name="rate" value="" class="form-control" onkeypress="return isNumberKey1(event)" autofocus required></td>
                                                        <?php } ?>
                                            </tr>
                                            <tr>
                                                <td colspan="3"  align="right"><b>Reply</b></td>
                                                <td align="right">
                                                <?php if(isset($reply)!=null){?>
                                                    <textarea  name="reply" value="<?php echo $reply; ?>" class="form-control" autofocus required><?php echo $reply; ?></textarea></td>
                                                    <?php } else{?><textarea  name="reply" value="" class="form-control" autofocus required></textarea></td>
                                                        <?php } ?>
                                            </tr>
                                        
                                            <tr>
                                                <td colspan="4" align="center"><br>
                                                    <input type="submit" name="btnquotation" class="btn btn-primary" value="Save">
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </form>
                            <?php 
                                } 
                            }else{
                                echo '<h1> No any Request Quotation.</h1>';
                            }
                            ?>
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
<script>
function isNumberKey1(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    {    
        // document.getElementById('error').innerHTML="This is required only numbers!!";
        alertify.success('This is required only numbers!!');
        document.getElementById("rate").focus();  
        return false;
    }
    document.getElementById('error').innerHTML=" ";
    return true;
}
</script>