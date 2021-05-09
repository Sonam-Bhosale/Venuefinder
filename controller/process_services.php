<?php include("../include/db_connect.php");?>
<?php
//video upload by venueholder
if(isset($_POST['video_upload']))
{
        $id=$_SESSION['venue_id'];
        $name = $_FILES['file']['name'];
        $description= $_POST['description'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $path = "../videos/";
        $target_file = $path . $name;
        $location="http://localhost/venuefinder/videos/".$name;
        $position= strpos($name, "."); 
        $fileextension= substr($name, $position + 1);
        $fileextension= strtolower($fileextension);
        move_uploaded_file($tmp_name, $path.$name);
        if (!empty($name))
        {
            if (($fileextension !== "mp4") && ($fileextension !== "avi") && ($fileextension !== "mov") && ($fileextension !== "3gp") && ($fileextension !== "webm"))
            {
            echo "<script>alert('The file extension must be .mp4, .avi, or .webm  or .mov in order to be uploaded')</script>";
            }
            else if (($fileextension == "mp4") || ($fileextension == "avi") || ($fileextension == "mov") ||($fileextension !== "3gp") || ($fileextension !== "webm"))
            {
                    $query = "INSERT INTO videos(holder_id,name,description,location,extension) VALUES('$id','$name','$description','$location','$fileextension')";
                   // echo $query;
                    mysqli_query($connect,$query);
                    if($query==true)
                    { 
                        echo "<script>alert('Upload successfully')</script>";
                        echo "<script>window.location.href='../Venue Holder/videos.php';</script>";
                    }
                    else
                    {
                        echo "Error:".$connect->error;
                    }
            }
        }
    }
    //add images by venueholder
    if(isset($_POST['btnimageupload']))
    {
        // File upload configuration
        $id=$_SESSION['venue_id'];
        $targetDir = "uploads/album/";
        $filename = $_FILES['files']['name'];
        $allowTypes = array('jpg','png','jpeg','gif');
        $album_name=$_POST['album_name'];
        //echo count( $filename);
        $filename = $_FILES['files']['name'];
        for($i=0;$i<count($filename);$i++)
        {
            $targetFilePath = $targetDir . $filename[$i];
            $location="http://localhost/venuefinder/controller/uploads/album/".$filename[$i];
            move_uploaded_file($_FILES["files"]["tmp_name"][$i], $targetFilePath);
           
                $sql="INSERT INTO images (holder_id,album_name,image_name,location) VALUES ('$id','$album_name','";
                $sql.= $_FILES['files']['name'][$i]."' ,'";
                $sql.=$location."')";
                // Insert image file name into database
                echo $sql;
                $insert = mysqli_query($connect,$sql);
                if($insert){
                    echo "<script>alert('Files are uploaded successfully.')</script>";
                    echo "<script>window.location.href='../Venue Holder/images.php';</script>";
                }else{
                   echo"Error:".$connect->error;
                }
        }
    } 
      
    //add details by venueholder
    if(isset($_POST['btnDetail']))
    {
        $id= $_SESSION['venue_id'];
        $venue_info= mysqli_real_escape_string($connect,$_POST['venue_info']);
        $seating_capacity= mysqli_real_escape_string($connect,$_POST['seating_capacity']);
        $chair= mysqli_real_escape_string($connect,$_POST['chair']); 
        $room= mysqli_real_escape_string($connect,$_POST['room']);
        $parking= mysqli_real_escape_string($connect,$_POST['parking']);
        $water= mysqli_real_escape_string($connect,$_POST['water']);
        $catering= mysqli_real_escape_string($connect,$_POST['catering']);
        $decoration= mysqli_real_escape_string($connect,$_POST['decoration']);
        $sound= mysqli_real_escape_string($connect,$_POST['sound']);
        $fan= mysqli_real_escape_string($connect,$_POST['fan']);
        $sql="INSERT INTO venue_details(venue_id,venue_info, chair, seating_capacity, room,parking, drink_water,catering, decoration, sound_system, ac_fan) values('$id','$venue_info','$seating_capacity','$chair','$room', '$parking','$water','$catering',
         '$decoration','$sound','$fan')";
        $result=mysqli_query($connect,$sql);
        if($result==true)
        {
            echo"<script> alert('Details added successfully !!')</script>";  
            echo "<script>window.location.href='../Venue Holder/venue_details.php';</script>";	  
        }
        else{
            echo "Error:".$connect->error;
        }
    }
    //user view count
    if(isset($_POST['btngetmore']))
    {
        $id=$_POST['id'];
        $vid=$_POST['vid'];
        $sql="select * from tbl_venue where vendor_id='$id' and venue_id= '$vid'";
        $result=mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($result)) 
		{
                $id=$row['vendor_id'];
                $vid=$row['venue_id'];
                $view=$row['views'];
                $view=$view+1;
                $update="update tbl_venue set views='$view' where vendor_id='$id' and venue_id ='$vid'";
                $res=$connect->query($update);
        }
        echo "<script>window.location.href='../viewvenue.php?id=$id&vid=$vid';</script>";
    }

    if(isset($_POST['btn_purchase']))
        {
            $id=$_POST['planid'];
            $vid= $_SESSION['venue_id'];
            $price=$_POST['price'];
            $status='Active';
            // echo $price;
                $q="select * from subscription_plan where plan_id='$id'";
               // echo $q;
                $r=mysqli_query($connect,$q);
                while($row1=mysqli_fetch_array($r))
                {
                    if($row1['monthly']==$price)
                    {
                        $date = date('Y-m-d');
                        $expire_date = date('Y-m-d', strtotime('+1 month', strtotime($date)));
                    }
                   else{
                        $date = date('Y-m-d');
                        $expire_date = date('Y-m-d', strtotime('+12 month', strtotime($date)));
                    }
                }
           $trans=rand();
            $q="insert into venue_plan(venue_id,plan_id,price,expire_date,status,trans_id) values('$vid','$id','$price','$expire_date','$status','$trans')";
            $output=mysqli_query($connect,$q);
            if($output)
            {
                echo "<script> alert('Plan Purchase Successfully')</script>";
				$select="select  id from venue_plan where venue_id='$vid' and plan_id='$id' order by id desc limit 1";
                        $result=mysqli_query($connect,$select);
                        while($row=mysqli_fetch_array($result))
                        {
                            $pid=$row['id'];
                        }
                        echo "<script>window.location.href='../venue holder/checkout.php?pid=$pid';</script>"; 
                //echo "<script>window.location.href='../Venue Holder/plan_detail.php';</script>";
            }
            else{
                echo "Error:".$connect->error;
            }
        }

        if(isset($_POST['btnEvent']))
        {
            $event=$_POST['event_name'];
            $price=$_POST['price'];
            $percentage=$_POST['percentage'];
            $id=$_SESSION['venue_id'];
            $sql="insert into event_master(venue_id,event_name,price,advance)values('$id','$event','$price',' $percentage')";
            $result=mysqli_query($connect,$sql);
            if($result)
            {
                echo "<script> alert('Event Added Successfully')</script>";
                echo "<script>window.location.href='../Venue Holder/event.php';</script>";
            }
            else{
                echo "Error:".$connect->error;
            }
        }

        //check availability
    if(isset($_POST['available']))
    {
        $vid=$_POST['venue'];
        $session=$_POST['session'];
        //echo $session;
        $date=$_POST['book_date'];
        $timsestamp=strtotime($date);
        $bookdate=date("d-m-Y",$timsestamp);
        $q="select * from book_venue where venue_id='$vid' and booking_date='$bookdate' and event_status='Confirmed'";
        $res=mysqli_query($connect,$q);
        echo mysqli_num_rows($res);
        if(mysqli_num_rows($res)>0){ 
        while($r=mysqli_fetch_array($res)){ 
            $slot=$r['session'];
            }
            if($slot=='morning')
            {
                if($session=='morning'){
                echo "<script>alert('Already Booked!!! Venue available at evening session only')</script>";                
                echo "<script>window.location.href='../satara.php';</script>";
                }
                else if($session=='fullday')
                {  echo "<script>alert('Venue not available to full day')</script>";
                     echo "<script>window.location.href='../satara.php';</script>";
                }
                else {
                    echo "<script>alert('You can book venue at evening session')</script>";
                     echo "<script>window.location.href='../satara.php';</script>"; 
                }
            }
            else if($slot=='evening'){
                if($session=='morning'){
                        echo "<script>alert('You can book venue at morning session ')</script>";                
                        echo "<script>window.location.href='../satara.php';</script>";
                    }
                    else if($session=='fullday')
                    {  echo "<script>alert('Venue not available to full day')</script>";
                        echo "<script>window.location.href='../satara.php';</script>";
                    }
                    else {
                        echo "<script>alert('Already Booked !! Venue available at morning session only')</script>";
                         echo "<script>window.location.href='../satara.php';</script>"; 
                    }
                }
            else{
                echo "<script>alert('Already booked for full day')</script>"; 
                echo "<script>window.location.href='../satara.php';</script>"; 
            }       
        }
    else
    {
        echo "<script> alert('Venue is free for booking')</script>";
        echo "<script>window.location.href='../satara.php';</script>";
    }
}
       
?>
 <?php
        if(isset($_POST['btnstatus']) && isset($_POST['status']))
        {
            $id=$_POST['book_id'];
            $status=$_POST['status'];
            $q="update book_venue set event_status='$status' where book_id='$id'";
          if(mysqli_query($connect,$q))
           { echo "<script>window.location.href='../venue holder/booking_order.php';</script>";}
        }
?>