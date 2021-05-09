<?php include("include/db_connect.php");?>
<?php
$r=$_GET['reason'];
$bid=$_GET['bookid'];
$q="update book_venue set reason='$r', remain_payment='0' where book_id='$bid'";
if(mysqli_query($connect,$q)){ 
		echo "<script>alert('Booking cancel successfully !!');</script>";
     echo "<script>window.location.href='booking.php'</script>";
    }

?>