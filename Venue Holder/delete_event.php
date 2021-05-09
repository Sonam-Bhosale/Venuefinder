<?php include("../include/db_connect.php");?>
<?php	
	if (isset($_GET['id']) )
	{
        $id=$_GET['id'];
        $vid=$_GET['vid'];
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
 
 var delmsg = confirm("Do you confirm to delete event <?php echo $id; ?>"); 
 
 	if(delmsg==true)
 	{
		alert('Event Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=event&id=<?php echo $id; ?>&vid=<?php echo $vid;?>';	
	}
 	else
 	{
		alert('Event Deletion Cancelled');
		location.href='../venue holder/event.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../venue holder/event.php';</script>

<?php
 }
 
?>



