<?php include("../include/db_connect.php");?>
<?php	
	if (isset($_GET['name']) )
	{
        $name = $_GET['name'];
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
 
 var delmsg = confirm("Do you confirm to delete album <?php echo $name; ?>?"); 
 
 	if(delmsg==true)
 	{
		alert('Album Deletion Confirmed');
		
		location.href='../controller/delete_master.php?type=album&name=<?php echo $name; ?>&id=<?php echo $id; ?>';	
	}
 	else
 	{
		alert('Album Deletion Cancelled');
		location.href='../venue holder/images.php';
		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href=' ../venue holder/images.php';</script>

<?php
 }
 
?>



