<?php
    include("../include/db_connect.php");
    if(isset($_POST['btnquotation']))
    {
        $qid=$_POST['qid'];
        $token=$_POST['token'];
        $rate=$_POST['rate'];
        $email=$_POST['email'];
        $reply=$_POST['reply'];
        $date=date('Y-m-d');
        $venue_id=$_SESSION['venue_id'];
        $q="select *,register_user.email as uemail,register_user.mobile as contact,register_venue.email as vemail from register_user,register_venue ,venue_enquires where venue_enquires.token='$token' and venue_enquires.venue_id=register_venue.user_id and venue_enquires.user_id=register_user.user_id and register_venue.user_id='$venue_id' ";
        $result=mysqli_query($connect,$q);
            while($row=mysqli_fetch_array($result))
            {
                $number=$row['contact'];
                $user_email=$row['uemail'];
                $venue_email=$row['vemail'];
            }
        $sql="select * from venue_enquires where token='$token' and id='$qid'";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($result))
        {
            $event=$row['event_name'];
            $qrate=$row['quotation_rate'];
            if($qrate>0)
            {
                echo "<script>alert('Request pricing already sent to user!!')</script>";  
                echo "<script>window.location.href='../venue holder/booking_request.php';</script>";	 
            }
            else{
                $sql="update venue_enquires set quotation_rate='$rate',reply='$reply',updated_at = '$date' where token ='$token' and id='$qid'";
                //echo $sql;
                $result=mysqli_query($connect,$sql);
                if($result==true)
                {
                    echo "<script>alert('Request pricing successfully sent to user!!')</script>";    
                    $to = $email;
                    $subject = "Response of your Quotation";
                    $message = "\r\nQuotation request is sent to you.\r\nPlease visit to the website or click on following link:\r\n http://localhost/venuefinder/enquires.php \r\nThank you";
    
                    $headers = "From :'$venue_email'";
                
                    if(mail($to,$subject,$message,$headers))
                    {
                    echo "<script>alert('Your response sent successfully!!')</script>";
                    echo "<script>window.location.href='http://www.gmail.com';</script>";	  
                    }
                    else
                    {
                        echo "Mail Not Send to User";
                    }  
                    $fields = array(
                        "sender_id" => "FSTSMS",
                        "message" => "$username send response back to your request quotation for event $event!!\r\nPlease check response by checking your email or visit to the website.\r\nThank You!!! ",
                        "language" => "english",
                        "route" => "p",
                        "numbers" => $number,
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
                   echo "<script>window.location.href='../venue holder/booking_request.php';</script>";	  
                  
                }
                else
                {
                    echo "Error:".$connect->error;
                }
            }
           
        }
               
    }

?>