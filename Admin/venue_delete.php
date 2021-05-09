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
 
 var delmsg = confirm("Do you confirm to delete vendor <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Venue Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=vendor&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Vendor Deletion Cancelled');
		location.href='../Admin/manage_vendorphp';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../Admin/manage_venue.php';</script>

<?php
 }
 
?>



