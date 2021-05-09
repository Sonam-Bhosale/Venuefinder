<?php include('sidenavbar.php' );?>

<h3 class="homeSection__title">My Enquires</h3>
<hr class="mt20 medium bold">    
<br>
<table align="center" border="1" width="800px">
    <thead>
        <tr align="center" style="font-weight:bold">
            <td>Sr.No</td>
            <td>Venue Name</td>
            <td>Event Name</td>
            <!-- <td>Quotation Rate</td> 
            <td>Response</td>             -->
            <td>Creation Date</td>
            <td>Response Date</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
 <?php   
 $id=$_SESSION['User'];
 $sql="select *,date(venue_enquires.created_at) as cdate,date(venue_enquires.updated_at) as udate from venue_enquires,tbl_venue where venue_enquires.user_id=$id and
  venue_enquires.venue_id=tbl_venue.vendor_id order by id desc";
        $result=$connect->query($sql);
        $i=1;
                if ($result->num_rows> 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                       
                        $token=$row['token'];
                                ?>
        <tr align="center">
            <td><?php echo $i; ?></td>
            <td><a href="viewvenue.php?id=<?php echo $row['venue_id']; ?>"><?php echo $row['venue_name']; ?></a></td>
            <td><?php echo $row['event_name']; ?></td>            
           
           <td><?php echo $row['cdate']; ?></td>
           <?php
            if($row['udate']==null)
                { ?>
                    <td> - </td>
                <?php }
            else
            {?>
                <td><?php echo $row['udate']; ?></td>
           <?php } ?>
            <td><a href="deletequotation.php?id=<?php echo $id;?>&token=<?php echo $token;?>" data-toggle="tooltip" data-placement="bottom" title="Remove" > X</a> |
            <a href="viewquotation.php?id=<?php echo $id;?>&token=<?php echo $token;?>" data-toggle="tooltip" data-placement="bottom" title="View" ><i class="fa fa-eye"><i></a></td>
        </tr>
                    <?php $i++; } }                     
                    else{
                        echo '<tr><td colspan="8" align="center"><h1> No any data available</h1></td></tr>';
                    }?>
    </tbody>
</table>  
<br><br>
            </div>  
            <br><br><br>   