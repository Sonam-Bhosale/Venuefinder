<?php 
include('include/db_connect.php');
$id=$_GET['lid'];
$s="select * from rating where id='$id'";
$r=mysqli_query($connect,$s);
while($row=mysqli_fetch_array($r))
{
    $like=$row['likes'];
    $vid=$row['venue_id'];
    $update="update rating set likes='$like'+1 where id=$id";
    if(mysqli_query($connect,$update))
    {
        //echo 'Ok';
        echo "<script>window.location.href='view_review.php?id=$vid'</script>";
    }
    else
    {
        echo "Error:".$connect->error;
    }
}
