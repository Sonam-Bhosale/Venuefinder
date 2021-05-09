<?php include("../include/db_connect.php");?>
<?php	
	if (isset($_GET['name']) )
	{
        $id=$_GET['id'];
		if($name=="")
		{
		?>
        <script language="javascript">
 
 			alert('Nothing Selected.');
 
 		</script>
        <?php
		exit;
	}
	else
	{
?>
 
 <script language="javascript">
 
 var delmsg = confirm("Do you confirm to delete video <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Video Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=video&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Video Deletion Cancelled');
		location.href='../venue holder/videos.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../venue holder/videos.php';</script>

<?php
 }
 
?>



