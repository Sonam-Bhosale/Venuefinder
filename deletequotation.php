<?php include("include/db_connect.php");?>
<?php	
	if (isset($_GET['id']) )
	{
        $id=$_GET['id'];
        $token=$_GET['token'];
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
 
 var delmsg = confirm("Do you confirm to delete quotation of token number <?php echo $token; ?> from wishlist ?"); 
 
 	if(delmsg==true)
 	{
		alert('Quotation Deletion Confirmed');
		
		location.href='controller/delete_master.php?type=quotation&id=<?php echo $id;?>&token=<?php echo $token;?>';	
	}
 	else
 	{
		alert('Quotation Deletion Cancelled');
		location.href='enquires.php';		
	}	
 </script>
 	 
 <?php
	}

 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
?>

<script>window.location.href='enquires.php';</script>

<?php
 }
 
?>



