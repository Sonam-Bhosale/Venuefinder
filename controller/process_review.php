<?php include("../include/db_connect.php");?>
<?php
if(isset($_POST['btnSend']))
{
        $vendor_id=$_POST['id'];
        $venue_id=$_POST['vid'];
        $quality=$_POST['val_quality'];
        $response=$_POST['val_response'];
        $value=$_POST['val_value'];
        $recommend=$_POST['recommend'];
        $title=$_POST['title'];
        $desc=$_POST['opinion'];
        $amt=$_POST['amount'];
        $name=$_POST['username'];
        $target_file='uploads/review';
        $imagetmp=$_FILES['photo']['name'];
        $location = $target_file.$_FILES['photo']['name']; ;          
        move_uploaded_file($_FILES['photo']['tmp_name'], $location);

        $sql="insert into rating(venue_id,quality,response,value,recommend,title,description,amount,name,photo) values('$venue_id','$quality','$response','$value','$recommend','$title','$desc','$amt','$name','$imagetmp')";
        echo $sql;
        $result=mysqli_query($connect,$sql);
        if($result)
        {
            echo "<script>alert('Your review sent successfully!!!')</script>";
            echo "<script>window.location.href='../view_review.php?id=$vendor_id'&vid=$venue_id;</script>";	
        }
        else{
            echo "Error:".$connect->error;
        }
}

?>