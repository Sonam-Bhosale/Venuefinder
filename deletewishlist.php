<?php include("include/db_connect.php");?>
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
 
 var delmsg = confirm("Do you confirm to delete  venue <?php echo $vid; ?> from wishlist ?"); 
 
 	if(delmsg==true)
 	{
		alert('Wishlist Deletion Confirmed');
		
		location.href='controller/delete_master.php?type=wishlist&id=<?php echo $id;?>&vid=<?php echo $vid;?>';	
	}
 	else
 	{
		alert('Wishlist Deletion Cancelled');
		location.href='showwishlist.php';		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href='showwishlist.php';</script>

<?php
 }
 
?>



