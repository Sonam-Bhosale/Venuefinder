<?php 
$id=$_GET['id'];

include('header.php');
	if(!isset($_SESSION['User']))
	{
        echo"<script> alert('You Must Login First')</script>";
        echo "<script>window.location.href='index.php';</script>";	     
	}
    else
    { 
        

        $sql="select * from register_venue,venue_details where user_id=$id and user_id=venue_id";
        $result=$connect->query($sql);
                if ($result->num_rows> 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
?>


<h3 class="homeSection__title">Request for Quotation</h3>
<hr class="mt20 medium bold">
            <form action="controller/quotation_email.php?id=<?php  echo $id; ?>" method="post" name="form">
            <table  align="center">

                <tbody>
                <input type="hidden" value="<?php echo $_SESSION['User']; ?>" name="user">
                <input type="hidden" value="<?php echo $row['user_id']; ?>" name="venue_id">
                <input type="hidden" value="<?php echo $row['email']; ?>" name="email">
             
                <tr><td colspan="2"><td>
                    <td colspan="1" align="Center"><b>Booking Date</b></td>
                </tr>
                <tr><td colspan="2"><td>
                    <td colspan="1" align="right">
                        <input type="date" name="date"class="form-control" value="" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><b>Venue Details</b></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                         <input type="text" value="<?php echo $row['venue_name']; ?>"readonly>
                    </td>
                </tr>

                <tr>
                    <td colspan="4"> <hr><b>Event Details</b></td>
                </tr>
                <tr>
                    <td align="center">Catering </td>
                    <td align="center">Decoration </td>
                    <td align="center">Sound System </td>
                    <td align="center">Ac/Fan</td>
                </tr>
                <tr> 
                    <td>
                    <input type="text" value="<?php echo $row['catering']; ?>"readonly>&nbsp;&nbsp;&nbsp;
                  </td>
                  <td>
                  <input type="text" value="<?php echo $row['decoration']; ?>"readonly>&nbsp;&nbsp;&nbsp;
                  </td>
                  <td>
                  <input type="text" value="<?php echo $row['sound_system']; ?>"readonly>&nbsp;&nbsp;&nbsp;
                  </td>
                  <td>
                  <input type="text" value="<?php echo $row['ac_fan']; ?>"readonly>&nbsp;&nbsp;&nbsp;
                   </td>
                </tr>
                <tr>
                    <td><br><br>Another Requirement </td>
                    <td><br><br><textarea  placeholder="Your Requirement" name="requirement" required></textarea>
                     </td>
                </tr>
                <tr>
                    <td align="right" colspan="4">
                    <br><hr>   <br>  <button type="submit"name="quotation" class="btn btn-primary">Save</button>
                    </td>
                </tr>
            </tbody>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<!-- End Sorting -->
</div>

<?php
                    }
                }
            }
   

?>