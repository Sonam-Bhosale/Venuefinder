<?php include('header.php'); ?>

<div class="wrapper-800 contact-page">
        <h1 class="text-center mt30">New User Registeration To VenueFinder</h1>
        <hr class="mt20 medium bold">
<p align="center" id="error"></p>
<form class="app-contact-form mt40 pure-form" action="Controller/process_master.php" method="post">
                       
                            <div class="form-group">
                                <label for="user-name"><b>Full Name</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="text" class="pure-u-1" id="user_name" value="" name="name" required placeholder="Sai Vijay Shinde" onkeypress="return onlyAlphabets(event,this);" autofocus onblur="onLeave()">
                               
                            </div>
                            <?php $sql="select user_name,mobile from register_user";
                                $result=mysqli_query($connect,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                    $username=$row['user_name'];
                                    $mobile=$row['mobile'];
                                }
                                ?>
                            <div class="form-group">
                                <label for="user-name"><b>User Name</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="text" class="pure-u-1" id="uname" value="" name="user_name" required placeholder="Sai123" autofocus onchange="validate()">
                                <input type="hidden" id="username" value='<?php echo $username;?>'>
                               
                            </div>
                            <div class="form-group">
                                <label for="mobile"><b>Mobile Number</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="text" class="pure-u-1" id="mobile" oninput="showfocus(this)" name="mobile" value="" placeholder="9830750890" required data-max=10  pattern="\d{10}" minlength="10" maxlength="10" autofocus onchange="myfun1()" onkeypress="return isNumberKey1(event)">
                                <input type="hidden" id="number" value='<?php echo $mobile;?>'>
                             
                            </div>
                            <div class="form-group">
                                <label for="mobile"><b>Email</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="email" class="pure-u-1" id="email" name="email" value="" placeholder="sai26@gmail.com" required autofocus>
                              
                            </div>
                            <div class="form-group">
                                <label class="address"><b>Address</b></label>
                                <textarea required class="pure-u-1" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="text"><b>Password</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="password" name="pass" id="pass" class="pure-u-1" required  placeholder="*********" autofocus minlength="5" onchange="callfunction()">
                                 <input type="checkbox" onclick="view()"> Show Password
                            </div>
                            <div class="form-group">
                                <label for="text"><b>Confirm Password</b><sup style="font-size:16px;color:red">*</sup></label>
                                <input type="password" name="cpass" id="cpass" class="pure-u-1" placeholder="*********"  required  autofocus onkeyup='check();'>
                                <input type="checkbox" onclick="viewc()"> Show Password
                            </div>
                          <input type="submit"  class="btn-flat red mt10 pure-u-1" name="btnUserReg" value="Register">
                            </br>
                            <div class="form-group">
                            <h4 align="center">Already have an account with venuefinder? <a href="login.php" style="color:red">Login</a></h4>
                            </div>
                     </form>
</div>
 <?php include('footer.php'); ?>
 <script>

function validate()
        {
                var txtusername= document.getElementById("uname").value;
                var dbusername= document.getElementById("username").value;
              if(txtusername==dbusername)
              {
                  alertify.success('User Name Already Registered!!! Please Enter Another User Name');
                  document.getElementById('err_user_name').innerHTML = 'User Name Already Registered!!! Please Enter Another User Name'; 
             }
             else
             {
                document.getElementById('err_user_name').innerHTML = '';
             }
        }
        function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;

                if(textBox.value=='' || textLength<=6)
                {
                    //document.getElementById('error').innerHTML='Please entered more than 6 characters for password';
                    alertify.success('Please entered more than 6 characters for password');
                    document.getElementById("pass").focus();  
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }
        }
        function onlyAlphabets(e,t)
		  {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e)
					{
                    var charCode = e.which;
                }
                else { document.getElementById('error').innerHTML="";return true;}
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode ==32))
				{
					    document.getElementById('error').innerHTML="";
					     return true;					 						 
				}
                else
					//document.getElementById('error').innerHTML="This is required only Alphabets!!";
                    alertify.success("This is required only Alphabets!!");
                    document.getElementById("user_name").focus();  
					return false;
					
            }
            catch (err) {
                alert(err.Description);
            }
        }
 </script>