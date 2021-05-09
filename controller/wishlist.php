<?php include('../include/db_connect.php'); ?>
<?php 

if(isset($_SESSION['User_Name']))
{
        $userid=$_SESSION['User'];
        $venueid=$_GET['vid'];
        $vendorid=$_GET['id'];
        $sql="select * from wishlist where userid='$userid' and venue_id='$venueid'";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $sql="delete from  wishlist where userid='$userid' and venue_id='$venueid'";
            if(mysqli_query($connect,$sql)){
                echo "<script> alert('Remove From Wishlist')</script>";
                echo "<script>window.location.href='../viewvenue.php?id=$vendorid&vid=$venueid';</script>";		 
            }
            else
            {
                echo "Error:".$connect->error;
            }
                $date=date('Y-m-d');
                $q="update wishlist set removed_at ='$date' where userid='$userid' and venue_id='$venueid' ";
                 mysqli_query($connect,$sql);
        }
        else{
            $sql="insert into wishlist(userid,venue_id)values('$userid','$venueid')";
            if(mysqli_query($connect,$sql)){
                echo "<script> alert('Saved in wishlist')</script>";
                echo "<script>window.location.href='../viewvenue.php?id=$vendorid&vid=$venueid';</script>";	
            }
            else
            {
                echo "Error:".$connect->error;
            }
        }
}
else{
    echo "<script> alert('Login First!!')</script>" ; 
    echo "<script>window.location.href='../login.php';</script>";	
}


?>