<?php include('../include/db_connect.php'); ?>
 <?php 

if(isset($_SESSION['User_Name']))
{
        $userid=$_SESSION['User'];
        $venueid=$_GET['vid'];
        $vendorid=$_GET['id'];
        $sql="select * from book_venue where user_id=$userid and venue_id=$venueid and vendor_id=$vendorid and event_status='Confirmed'";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_array($result))
            {
                $date=$row['booking_date'];
            }
            echo "<script> alert('Already booked to date $date')</script>";  
            echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
        }
        else{
          echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";
       }        
}
else{
    echo "<script> alert('Login First !!')</script>" ; 
    echo "<script>window.location.href='../login.php';</script>";	
}

?> 