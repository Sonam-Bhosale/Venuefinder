<?php include('sidenavbar.php' );?>

<h3 class="homeSection__title">Wishlist</h3>
<hr class="mt20 medium bold">
</br>
<table align="center" width="700px" cellspacing="0" border="1">
    <thead>
        <tr align="center" style="color: black;font-weight:bold">
            <td>Sr.No</td>
            <td>ID</td>
            <td>Venue Name</td>
            <td>Action</td>
        </tr>
    </thead>   
        <?php   
        $id=$_SESSION['User'];
        $i=1;
        $sql="select * from wishlist w,tbl_venue tv,register_user ru,tbl_vendor td where td.vendor_id=tv.vendor_id and w.userid=$id and  w.venue_id=tv.venue_id and w.userid=ru.user_id" ;
        $result=$connect->query($sql);
        if ($result->num_rows> 0) 
        {
        while($row = $result->fetch_assoc()) 
        {  
            $vid=$row['venue_id'];    
            $uid=$row['vendor_id'];         
            ?>
    <tbody>
    <tr align="center">
            <td><?php echo $i; ?></td>
            <td><?php echo $vid; ?></td>
            <td><a href="viewvenue.php?id=<?php echo $uid; ?>&vid=<?php echo $vid;?>"><?php echo $row['venue_name']; ?></a></td>
            <td><a href="deletewishlist.php?id=<?php echo $id;?>&vid=<?php echo $vid;?>" data-toggle="tooltip" data-placement="bottom" title="Remove" > X</a>
        </tr>
         <?php $i++; } }else{?>
          <tr align="center">
                        <td colspan="4"><br><h3 align="center">No Venue in Wishlist</h3><br></td>                       
           </tr>     
         <?php } ?>
    </tbody>
</table>  

<br><br> 
 </div>  
 <br><br>  <br><br>  