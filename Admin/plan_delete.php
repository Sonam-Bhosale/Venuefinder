<?php include("../include/db_connect.php");?>
<?php	
	if (isset($_GET['plan_id']) && is_numeric($_GET['plan_id']))
	{
		$id = $_GET['plan_id'];
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
 
 var delmsg = confirm("Do you confirm to delete plan <?php echo $id; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Plan Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=plan&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Plan Deletion Cancelled');
		location.href='../Admin/plan.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../Admin/plan.php';</script>

<?php
 }
 
?>



