<?php include("include/db_connect.php");?>
<?php 
$userid=$_SESSION['User'];
$book_id=$_GET['id'];
$s="select * from book_event where event_status='Canceled' and book_id='$book_id' and user_id='$userid'";
//echo $s;
if(mysqli_query($connect,$s)){
	echo "<script>alert('Already Cancel !!')</script>";
	echo "<script>window.location.href='booking.php'</script>";
}
else{
	$d="update book_venue set event_status='Canceled' where book_id='$book_id' and user_id='$userid'";
	//echo $d;
	$result=mysqli_query($connect,$d);
	if($result==true)
	{
		echo "<script> var reason=prompt('Please enter cancel reason','Your Reason');</script>";
		//echo "<script>alert('Booking cancel successfully !!');</script>";
		echo "<script>window.location.href='booking_cancel.php?reason='+reason+'&bookid=$book_id';</script>";
	}
}
	?>
	