<?php include('sidenavbar.php' );?>

<h3 class="homeSection__title">View Enquires</h3><hr class="mt20 medium bold">
<?php 

$id=$_SESSION['User'];
$token=$_GET['token'];
//echo $id;
    $sql = "SELECT * FROM venue_enquires where user_id='$id' and token='$token'";
    $result=$connect->query($sql);
    while($row = $result->fetch_array())
    {
        $reply=$row['reply'];
?>
<form action='controller/credentials.php' method="post">
<table align="center" width="900px">
    <tr align="right"></tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Booking Date &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
        <td> 
            <input type="text" class="pure-u-1" id="booking_date"  name="booking_date" value="<?php echo $row['booking_date']; ?>" autofocus>
        </td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
        <td><?php  if(isset($row['quotation_rate'])){echo $row['quotation_rate']; }else{echo '-';}?></td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Reply &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; </h4></td>
        <td>                              
             <?php if(isset($reply)!=null){echo $reply;}else{ echo 'Waiting for Response.';?><i class="fa fa-spinner"></i><?php }  ?>
        </td>
    </tr>
    
</table>
<br>
</form>
    <?php } ?>
</div> 
            </div>  