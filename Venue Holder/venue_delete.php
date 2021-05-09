<?php include("../include/db_connect.php");?>
<?php	
	if (isset($_GET['vid']) && is_numeric($_GET['vid']))
	{
		$id = $_GET['vid'];
		if($id=="")
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
 
 var delmsg = confirm("Do you confirm to delete venue <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Venue Facility Details Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=venueservice&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Venue Deletion Cancelled');
		location.href='../venue holder/venue_details.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../venue holder/venue_details.php';</script>

<?php
 }
 
?>



