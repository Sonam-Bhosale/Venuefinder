<?php include("../include/db_connect.php");?>
<?php
    //admin forgot password
    if(isset($_POST['btnReset']))
    {
        $email=$_POST['email'];
        $sql="select * from tbl_admin where email='$email'";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($result))
        {
            $user_email=$row['email'];
            $userid=$row['id'];
        }
$to = $user_email;

$subject = "Your Reset Password Link";
 
$message = "Please click following link to reset password";
$message.="http://localhost/venuefinder/Admin/reset.php?id='$userid'";

$headers = "From :'VenueFinder'";
echo "To".$user_email." message".$message."header".$headers."sub".$subject;
        if(mail($to, $subject, $message, $headers))
        {
            echo "<script>alert('Your Reset Password Link has been sent to your email');</script>";
            //echo "<script>window.location.href='../Admin/confirm.php';</script>";	 
        }
        else
        {
            echo "<script>alert('Failed to Recover your password, try again');</script>";
            //echo "<script>window.location.href='../Admin/forgot.php';</script>";	 
        }
    }
    if(isset($_POST['btnConfirm']))
    {
        $id=$_GET['id'];
        $password=md5($_POST['pass']);
        $email=$_POST['email'];
        $sql="update tbl_admin  set password='$password' where id='$id' and email='$email'";
        $result=mysqli_query($connect,$sql);
        if($result)
        {
            echo "<script>alert('New password is set!!');</script>";
            echo "<script>window.location.href='http://www.gmail.com'</script>";
        }
        else
        {
            echo "<script>alert('Failed to set your password, try again');</script>";
            echo "<script>window.location.href='http://www.gmail.com'</script>";
        }
    }
     //user forgot password
     if(isset($_POST['btnUserforgot']))
     {
         $mobile=$_POST['txtreset'];
         $sql="select * from register_user where mobile='$mobile'";
         $result=mysqli_query($connect,$sql);
         while($row=mysqli_fetch_array($result))
         {
             $user_email=$row['email'];
             $userid=$row['user_id'];
             $mobile=$row['mobile'];
             $name=$row['name'];
             
         }
         $random_password = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; // Initializing PHP variable with string
         $rand = substr(str_shuffle($random_password), 0, 6); // Getting first 6 word after shuffle.
            $new_password=md5($rand);
            $update= "update register_user set password='$new_password' where mobile=$mobile";
           
                $fields = array(
                    "sender_id" => "FSTSMS",
                    "message" => "\r\nFrom VenueFinder\r\n$name your password is follows:\r\n\nNew Password:$rand\r\n\nNow you can login successfully.\r\nThank You !!!",
                    "language" => "english",
                    "route" => "p",
                    "numbers" => $mobile,
                );
                
                $curl = curl_init();
                
                curl_setopt_array($curl, array(
                  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_SSL_VERIFYHOST => 0,
                  CURLOPT_SSL_VERIFYPEER => 0,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "POST",
                  CURLOPT_POSTFIELDS => json_encode($fields),
                  CURLOPT_HTTPHEADER => array(
                    "authorization: cLArG39NDwsHjM7YnlJTBoepOSF1ihfdR5E0V8vWzIqumPZCgypnr4HTmwW89yut7S5oRea2xbNhiUV3",
                    "accept: */*",
                    "cache-control: no-cache",
                    "content-type: application/json"
                  ),
                ));
                
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                if ($err) {
                  echo "cURL Error #:" . $err;
                } else {
                  //echo $response;
                } if(mysqli_query($connect,$update))
                {
                    echo "<script>alert('New password is sent to your mobile number!!')</script>";
                    echo "<script>window.location.href='../login.php'</script>";
    
                }
            else{
                echo "Error:".$connect->error;
            }    
            
     }
?>

