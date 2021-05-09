 <?php
        include("../include/db_connect.php");
        $id=$_GET['id'];
            $sql="select * from register_venue where user_id=$id"; 
            $result=$connect->query($sql);
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $id=$row['user_id'];
                    $name=$row['venue_name'];
                    $mobile=$row['mobile'];
                    $email_venue=$row['email'];
                }
            }
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length=10;
        $charactersLength = strlen($characters);
        $token = '';
        for ($i = 0; $i < $length; $i++)
         {
            $token .= $characters[rand(0, $charactersLength - 1)];
        }
        $uid=$_SESSION['User'];
        $s="select * from register_user where user_id=$uid";
        $r=mysqli_query($connect,$s);
        While($row=mysqli_fetch_array($r))
        {
            $username=$row['name'];
            $email=$row['email'];
            $number=$row['mobile'];
        }
        if(isset($_POST['quotation']) && isset($_SESSION['User_Name']))
        {
           
            $date= mysqli_real_escape_string($connect,$_POST['book_date']);
            $event= mysqli_real_escape_string($connect,$_POST['event']);
            $requirement= mysqli_real_escape_string($connect,$_POST['requirement']);
           
            $sql="insert into venue_enquires(user_id,venue_id,booking_date,event_name,token,requirement) 
            values('$uid','$id','$date','$event','$token','$requirement')";
           // echo $sql;
           
           $result=mysqli_query($connect,$sql);
            if($result==true)
            {  
                echo "<script>alert('Your pricing request has been send to vendor!!!')</script>"; 
                
                $to = $email;
                $subject = "Request For Quotation";
                $message = " 
                Request For Quotation .
                Please give the best possible rate.
                The Request for quotation can be accessed by clicking on the following link : 
                http://localhost/venuefinder/quotation_get.php?token=$token ";

                $headers = "From :'sonambhosale9635@gmail.com'";
            
              
                if(mail($to,$subject,$message,$headers))
                {
                    echo "<script>alert('Your Request For Quotation has been send to Vendors')</script>";
                    //echo "<script>	window.location.href='../enquires.php';</script>";
                }
                else
                {
                    echo "<script>alert('Failed to send Request, try again')</script>";
                    //echo "<script>	window.location.href='../viewvenue.php?id=$id';</script>";
                }   
                $fields = array(
                       "sender_id" => "FSTSMS",
                       "message" => "$username send you to request pricing for event $event!!\r\nPlease give response by checking your email or visit to the website.\r\nThank You!!! ",
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
                   }
            echo "<script>	window.location.href='../enquires.php';</script>"; 
            }
            else
            {
                echo "Error:".$connect->error;
            }
        }

        ?>