
<?php include('../include/db_connect.php'); ?>
<?php 
if(isset($_SESSION['User_Name']))
{
    if(isset($_POST['btnBook']))
    {
                $userid=$_SESSION['User'];
                $venueid=$_POST['vid'];
                $vendorid=$_POST['vendorid'];
                $mobile=$_POST['mobile'];
                $session=$_POST['session'];
                $advance_payment=$_POST['total'];
                $remain=$_POST['remain'];
                $event=$_POST['event']; 
                $date=$_POST['book_date'];
                $timsestamp=strtotime($date);
                $bookdate=date("d-m-Y",$timsestamp);
				$trans=rand();
                $q="select * from book_venue where venue_id='$venueid'and vendor_id='$vendorid' and booking_date='$bookdate' and event_status='Confirmed'";
                $res=mysqli_query($connect,$q);
                //echo mysqli_num_rows($res);
                if(mysqli_num_rows($res)>0)
                { 
                while($r=mysqli_fetch_array($res)){ 
                    $slot=$r['session'];
                    }
                    if($slot=='morning')
                    {
                        if($session=='morning'){
                        echo "<script>alert('Already Booked!!! Venue available at evening session only')</script>";                
                        echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                        }
                        else if($session=='fullday')
                        {  echo "<script>alert('Venue not available to full day')</script>";  
                            echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                        }
                        else {
                            echo "<script>alert('You can book venue at evening session')</script>";
                            echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                        }
                    }
                    else if($slot=='evening'){
                        if($session=='morning'){
                                echo "<script>alert('You can book venue at morning session ')</script>";                
                                echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                            }
                            else if($session=='fullday')
                            {  echo "<script>alert('Venue not available to full day')</script>";
                                echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                            }
                            else {
                                echo "<script>alert('Already Booked !! Venue available at morning session only')</script>";
                                echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                            }
                        }
                    else{
                        echo "<script>alert('Already booked for full day')</script>";
                        echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                    }       
                }
                else
                {
                    $book_id="BID".rand();
                    $sql="insert into book_venue(book_id,vendor_id,venue_id,user_id,event_name,booking_date,session,advance_payment,remain_payment,transaction_id)values('$book_id','$vendorid','$venueid','$userid','$event','$bookdate','$session','$advance_payment','$remain','$trans')";
                    $result=mysqli_query($connect,$sql);
                   
                    if($result==true)
                    {
                        echo "<script>alert('Go to checkout page!!!')</script>"; 
                        $last_id=mysqli_insert_id($connect);
                        $select="select book_id from book_venue where venue_id='$venueid' and user_id='$userid' order by book_id desc limit 1";
                        $result=mysqli_query($connect,$select);
                        while($row=mysqli_fetch_array($result))
                        {
                            $bid=$row['book_id'];
                        }
                        echo "<script>window.location.href='../checkout.php?bid=$bid';</script>"; 
                    }
                    else{
                        echo "Error:".$connect->error;
                        echo "<script>window.location.href='../hire_form.php?id=$vendorid&vid=$venueid';</script>";     
                    }
                }
     }
}
else{
    echo "<script> alert('Login First')</script>" ; 
    //echo "<script>window.location.href='../login.php';</script>";	
}
?> 