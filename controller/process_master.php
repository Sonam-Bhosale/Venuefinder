<?php include("../include/db_connect.php");?>
<?php
        // add vendor by admin
        if(isset($_POST['btnAddVenue']))
        {
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP))
            {
                $ip = $client;
            }
            elseif(filter_var($forward, FILTER_VALIDATE_IP))
            {
                $ip = $forward;
            }
            else
            {
                $ip = $remote;
            }            
            $user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
            $city= mysqli_real_escape_string($connect,$_POST['city']);
            $email= mysqli_real_escape_string($connect,$_POST['email']);
            $mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
            $address= mysqli_real_escape_string($connect,$_POST['address']);
            $password= md5(mysqli_real_escape_string($connect,$_POST['password']));
            $status=mysqli_real_escape_string($connect,$_POST['status']);
            $date=date('Y-m-d');
            $sql="insert into tbl_vendor(name,mobile,email,address,password,status,ip,ctype,created_at) values('$user_name','$mobile','$email','$address','$password','$status','$ip','Admin','$date')";
           //echo $sql;
            $result=mysqli_query($connect,$sql);
             $fields = array(
                    "sender_id" => "FSTSMS",
                    "message" => "\r\nFrom VenueFinder:\r\nCongratulation $user_name your registeration successfully to VenueFinder.\r\nThanking You for signup!!!",
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
            if($result==true)
            {
                 echo "<script> alert('Vendor successfully register!!'); </script>";
                echo "<script>window.location.href='../Admin/add_vendor.php';</script>";
            }
            else{
                echo "Error:".$connect->error;
            }
        }
          //add plan by admin
          if(isset($_POST['btnPlan'])){
            $plan_name= mysqli_real_escape_string($connect,$_POST['plan_name']);
            $six_month= mysqli_real_escape_string($connect,$_POST['six_month']);
            $year= mysqli_real_escape_string($connect,$_POST['year']);
                    
            $sql="insert into subscription_plan(plan_name,three_month,yearly) values('$plan_name','$six_month','$year')";
            $result=mysqli_query($connect,$sql);
            if($result==true){
              echo"<script> alert('Subscription plan added !!') </script>";
              echo "<script>window.location.href='../Admin/plan.php';</script>";	    
            }
            else{
                echo "Error:".$connect->error;
            }
        }        
        // User Registration
        if(isset($_POST['btnUserReg']))
        {
            $name= mysqli_real_escape_string($connect,$_POST['name']);
            $user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
            $mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
            $email= mysqli_real_escape_string($connect,$_POST['email']);
            $address= mysqli_real_escape_string($connect,$_POST['address']);
            $password= md5(mysqli_real_escape_string($connect,$_POST['pass']));
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP))
            {
                $ip = $client;
            }
            elseif(filter_var($forward, FILTER_VALIDATE_IP))
            {
                $ip = $forward;
            }
            else
            {
                $ip = $remote;
            }    
            $s="select * from register_user where user_name='$user_name' and mobile='$mobile'";
            $r=mysqli_query($connect,$s);
            if(mysqli_num_rows($r)>0)
            {
               while($row=mysqli_fetch_array($r))
               {
                   if($row['user_name']==$username)
                   {
                    echo "<script> alert('User Name already registered!!!')</script>";
                    echo "<script>window.location.href='../register_user.php';</script>";	
                    exit();
                   }
                   if($row['mobile']==$mobile){
                    echo"<script> alert('Mobile Number already registered!!!')</script>";
                    echo "<script>window.location.href='../register_user.php';</script>";	
                    exit();
                   }
               }
            }else{
                    $sql="insert into register_user(name,user_name,mobile,address,password,email,ip) 
                    values('$name','$user_name','$mobile','$address','$password','$email','$ip')";
                    $result=mysqli_query($connect,$sql);            
                    $q="select user_id from register_user where user_name='$user_name' ORDER BY user_id DESC";
                    $result=mysqli_query($connect,$q);
                    while($row=mysqli_fetch_array($result))
                    {
                        $id=$row['user_id'];
                    }
                    $query="select * from notification where id='$id'";
                    $res=mysqli_query($connect,$query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<script>alert('Already placed')</sript>";
                    }
                    else{
                        $sql="insert into notification (id,notification) values('$id','User')";
                        $result=mysqli_query($connect,$sql); 
                    }
                    $fields = array(
                        "sender_id" => "FSTSMS",
                        "message" => "\r\nFrom VenueFinder:\r\nCongratulation $name You have register successfully to VenueFinder.\r\nThank You for signup!!!",
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
                    if($result==true)
                    {
                        echo "<script> alert('Successfully registered !!!')</script>";
                        echo "<script> alert('Successfully registered !! Now you can login now !!')</script>";
                        //echo "<script>window.location.href='../login.php';</script>";	    
                    }
                    else{
                        echo "Error:".$connect->error;
                    }
            }
        }
        //contact form
        if(isset($_POST['btn_contact']))
        {
            $name= mysqli_real_escape_string($connect,$_POST['name']);
            $email= mysqli_real_escape_string($connect,$_POST['email']);
            $phone= mysqli_real_escape_string($connect,$_POST['phone']);
            $message= mysqli_real_escape_string($connect,$_POST['message']);
            $sql="insert into contact(name,email,phone,message) values('$name','$email','$phone','$message')";
            $result=mysqli_query($connect,$sql);
            if($result==true)
            {
              echo"<script> alert('Your message successfully sent!!')</script>";
              echo "<script>window.location.href='../contact.php';</script>";	    
            }
            else{
                echo "Error:".$connect->error;
            }
        }
       
            
      
        //register vendor itself
        if(isset($_POST['RegisterVendor']))
        {
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP))
            {
                $ip = $client;
            }
            elseif(filter_var($forward, FILTER_VALIDATE_IP))
            {
                $ip = $forward;
            }
            else
            {
                $ip = $remote;
            }            
            $user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
            $email= mysqli_real_escape_string($connect,$_POST['email']); 
            $mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
            $address= mysqli_real_escape_string($connect,$_POST['address']);
            $password= md5(mysqli_real_escape_string($connect,$_POST['password']));
            
            $date=date('Y-m-d');
            $sql="insert into tbl_vendor(name,mobile,email,address,password,ip,created_at) values('$user_name','$mobile','$email','$address','$password','$ip','$date')";
            $result=mysqli_query($connect,$sql);            
            $q="select vendor_id from tbl_vendor where status='Deactive' and name='$user_name' ORDER BY vendor_id DESC";
            $result=mysqli_query($connect,$q);
            while($row=mysqli_fetch_array($result))
            {
                $id=$row['vendor_id'];
            }
            $sql="insert into notification (id,notification) values('$id','Vendor')";
            $result=mysqli_query($connect,$sql);   
            $fields = array(
                "sender_id" => "FSTSMS",
                "message" => "From VenueFinder:\r\nCongratulation $user_name your registration successfully to VenueFinder.\r\n\nThank you for signup!!! \r\n\nPlease wait for activate your account.",
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
            if($result==true)
            {
                 echo"<script>alert('Vendor Registration successfully!!')</script>";
                 echo "<script>window.location.href='../venue.php';</script>";	    
            }
            else{
                echo "Error:".$connect->error;
            }
        }
        if(isset($_POST['btnvenueadd'])){
            $id=$_SESSION['venue_id'];
            $venue_name= mysqli_real_escape_string($connect,$_POST['venue_name']);
            $email= mysqli_real_escape_string($connect,$_POST['email']);
            $landline= mysqli_real_escape_string($connect,$_POST['landline']);            
            $booking_amt= mysqli_real_escape_string($connect,$_POST['amt']);
            $address= mysqli_real_escape_string($connect,$_POST['address']);
            $date=date('Y-m-d');
            $vid='VID'.rand();           
            $target_file='uploads/logo';
            $target_file1='uploads/banner';
            $imagetmp=basename($_FILES['logo']['name']);
            $location = $target_file.$_FILES['logo']['name']; 
            $imagetmp1=basename($_FILES['userfile']['name']);
			$location1 = $target_file1.$_FILES['userfile']['name'];          
            if($imagetmp=="")   
            {
                $image="No image";
            }   
            else
            {
        
                $image= $imagetmp;
            }
            if($imagetmp1=="")   
            {
                $banner_image="No image";
            }   
            else
            {
        
                $banner_image= $imagetmp1;
            }
            move_uploaded_file($_FILES['logo']['tmp_name'], $location);
            move_uploaded_file($_FILES['userfile']['tmp_name'], $location1);
            $sql="INSERT INTO tbl_venue(venue_id, vendor_id, venue_name, booking_amt, venue_address, landline, email, logo, banner_image,created_at) values('$vid','$id','$venue_name','$booking_amt','$address','$landline','$email','$image','$banner_image','$date')";
            $result=mysqli_query($connect,$sql);   
            if($result==true)
            {
                 echo "<script> alert('Venue successfully added!!'); </script>";
                echo "<script>window.location.href='../Venue Holder/add_venue.php';</script>";
            }
            else{
                echo "Error:".$connect->error;
            }

        }
?>
 