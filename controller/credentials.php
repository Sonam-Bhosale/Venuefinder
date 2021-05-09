<?php include("../include/db_connect.php");?>
<?php
    //Admin Login
    if(isset($_POST['btnAdminLogin']))
    {
        $mobile=$_POST['mobile'];
        $passsword=md5($_POST['password']);          
        $sql="select * from tbl_admin where mobile='$mobile' and password='$passsword'";
        $result=$connect->query($sql);
        $row=mysqli_num_rows($result);
        if($row==1){
            while($row = $result->fetch_array()){      
                $user_name=$row['name'];
                $user_id=$row['id'];
                $_SESSION['admin']=$user_name;
                echo"<script> alert('Login Successfully!!!!')</script>";
                echo "<script>window.location.href='../Admin/dashboard.php';</script>";
            }
        }
        else {
            echo"<script> alert('Mobile Number and password are incorrect')</script>";
            echo "<script>window.location.href='../Admin/index.php';</script>";	            
        }
    }
    //Change Password Admin
    if(isset($_POST['btnUpdatePassword']))
    {
        $oldpassword= mysqli_real_escape_string($connect,$_POST['oldpassword']);
        $newpassword= mysqli_real_escape_string($connect,$_POST['newpassword']);
        $repassword = mysqli_real_escape_string($connect,$_POST['confirmpassword']);
        $name=$_SESSION['admin'];
        $old=md5($oldpassword);
        $newpass=md5($newpassword);
        $password_from_database_query="select password from tbl_admin where name='$name'";
        $password_from_database_result=mysqli_query($connect,$password_from_database_query);
        $row=mysqli_fetch_array($password_from_database_result);
        if($row['password']==$old){
                    $update_password_query="update tbl_admin set password='$newpass' where name='$name'";                    
                    $update_password_result=mysqli_query($connect,$update_password_query) or die(mysqli_error($connect));
                    echo "<script>alert('Your password has been changed to new password')</script>";
                    echo "<script>window.location.href='../Admin/dashboard.php'</script>";
        }
        else{
                echo "Error".$connect->error;
                echo "<script>alert('Invalid user')</script>";
                echo "<script>window.location.href='../Admin/changepassword.php'</script>";
        }            
    }
    //Venue Holder Login
    if(isset($_POST['btnLogin']))
    {
        $mobile=$_POST['mobile'];
        $passsword=md5($_POST['password']);          
        $sql="select * from tbl_vendor where mobile='$mobile' and password='$passsword' ";
        $result=$connect->query($sql);
        $row=mysqli_num_rows($result);
        if($row==1){
                       while($row = $result->fetch_array()){
                if($row['status']=='Active'){
                    $user_id=$row['vendor_id'];
                    $_SESSION['venue_id']=$user_id;                  
                     $_SESSION['last_login_time']=time();
                     echo"<script> alert('Login Successfully!!!!')</script>";
                   echo "<script>window.location.href='../Venue Holder/dashboard.php';</script>";  
                }
                else{
                    echo"<script> alert('Your account is Deactive!!!!')</script>";
                    echo "<script>window.location.href='../venue.php';</script>";	 
                }   
            }
        }
        else{
            echo"<script> alert('Mobile Number and password are incorrect!!!')</script>";
            echo "<script>window.location.href='../venue.php';</script>";	                
        }
    }
         
    //Change Password Venue Holder
    if(isset($_POST['btnVenuePassword']))
    {
        $oldpassword= mysqli_real_escape_string($connect,$_POST['oldpassword']);
        $newpassword= mysqli_real_escape_string($connect,$_POST['newpassword']);
        $repassword = mysqli_real_escape_string($connect,$_POST['confirmpassword']);
        $id=$_SESSION['venue_id'];
        $old=md5($oldpassword);
        $newpass=md5($newpassword);
        $password_from_database_query="select password from tbl_vendor where vendor_id='$id'";
        $password_from_database_result=mysqli_query($connect,$password_from_database_query);
        $row=mysqli_fetch_array($password_from_database_result);
        if($row['password']==$old){
                    $update_password_query="update tbl_vendor set password='$newpass' where vendor_id='$id'";                    
                    $update_password_result=mysqli_query($connect,$update_password_query) or die(mysqli_error($connect));
                    echo "<script>alert('Your password has been changed to new password !!')</script>";
                    echo "<script>window.location.href='../venue holder/changepassword.php'</script>";
        }
        else{
                echo "Error".$connect->error;
                echo "<script>alert('Invalid user')</script>";
                echo "<script>window.location.href='../venue holder/changepassword.php'</script>";
        }            
    }
    // End User Login
    if(isset($_POST['btnUserLogin']))
    {
        $mobile=$_POST['mobile'];
        $passsword=md5($_POST['password']);
        $sql="select * from register_user where mobile='$mobile' and password='$passsword'";
        $result=$connect->query($sql);
        $row=mysqli_num_rows($result);
        if($row>0){
            while($row = $result->fetch_array()){
                $user_name=$row['user_name'];
                $user_id=$row['user_id'];
            }
            $_SESSION['User']=$user_id;
            $_SESSION['User_Name']=$user_name;
            $_SESSION['last_login_time']=time();
            echo"<script> alert('Login Successfully!!')</script>";
           echo "<script>window.location.href='../profile.php';</script>";
        }
        else{
            echo "Error:".$connect->error;
            echo"<script> alert('Invalid Credentials!!')</script>";
            echo "<script>window.location.href='../login.php';</script>";
        }
    }
    //index search bar
    if(isset($_POST['find']))
    {
        $search=$_POST['name'];            
        $sql="select * from register_venue where venue_name like '%".$search."%' ";
        $result=$connect->query($sql);
        $row=mysqli_num_rows($result);
        if($row==1){
            while($row = $result->fetch_array())
            {      
                echo "<script>window.location.href='../search.php';</script>";
            }
        }
        else {
            echo"<script> alert('Sorry This venue are not registered !!')</script>";
            echo "<script>window.location.href='../index.php';</script>";	            
        }
    }
    
    //change profile user
    if(isset($_POST['btnProfile']))
    {
        $id=$_SESSION['User'];
        $name= mysqli_real_escape_string($connect,$_POST['name']);
        $user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
        $mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
        $email= mysqli_real_escape_string($connect,$_POST['email']);
        $address= mysqli_real_escape_string($connect,$_POST['address']);
        $date=date('Y-m-d');
        $sql="update register_user set updated_at='$date',name='$name',user_name='$user_name',email='$email',mobile='$mobile',address='$address' where user_id='$id'";
        $result=mysqli_query($connect,$sql);
        if($result)
        {
            echo "<script> alert('Profile Updated Successfully!')</script>";                
                echo "<script>window.location.href='../profile.php';</script>";
        }
        else{
            echo "Error:".$connect->error;
        }
    }
    //change password user
    if(isset($_POST['btnUserUpdate']))
    {
        $oldpassword= mysqli_real_escape_string($connect,$_POST['oldpassword']);
        echo $oldpassword;
        $newpassword= mysqli_real_escape_string($connect,$_POST['newpassword']);
        $repassword = mysqli_real_escape_string($connect,$_POST['confirmpassword']);
        $id=$_SESSION['User'];
        $old=md5($oldpassword);
        echo $old;
        $newpass=md5($newpassword);
        $password_from_database_query="select password from register_user where user_id='$id'";
        $password_from_database_result=mysqli_query($connect,$password_from_database_query);
        $row=mysqli_fetch_array($password_from_database_result);
        echo $row['password'];
        if($row['password']==$old){
                    $update_password_query="update register_user set password='$newpass' where user_id='$id'";                    
                    $update_password_result=mysqli_query($connect,$update_password_query) or die(mysqli_error($connect));
                    echo "<script>alert('Your password has been changed to new password!!')</script>";
                    echo "<script>window.location.href='../changepassword.php'</script>";
        }
        else{
                echo "Error".$connect->error;
                echo "<script>alert('Invalid user')</script>";
                echo "<script>window.location.href='../changepassword.php'</script>";
        }            
    }

?>

