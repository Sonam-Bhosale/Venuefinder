<?php include('sidenavbar.php' );?>
<h3 class="homeSection__title">Change Password</h3>
<hr class="mt20 medium bold">
<?php 
    $id=$_SESSION['User'];
    $sql = "SELECT * FROM register_user where user_id=$id";
    $result=$connect->query($sql);
    while($row = $result->fetch_array())
    {
        $password=$row['password'];
?>
<form action='controller/credentials.php' method="post">
        <p id="error" style="color:red"></p>
        <table align="center">
            <tr align="right"></tr>
            <tr>
                <td><h4>&nbsp;&nbsp;Old Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
                <td> <input  id="oldpassword" autofocus required name="oldpassword"  type="password" onchange="oldcheck()">
                      <input  id="dbold"  name="dbold"  type="hidden" value="<?php echo $password; ?>" ></td>
            </tr>
            <tr>
                <td><h4>&nbsp;&nbsp;New Password &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
                <td> <input  id="newpassword" autofocus required onchange="callfunction()" name="newpassword"  type="password"></td>
            </tr>
            <tr>
                <td><h4>&nbsp;&nbsp;Re-Type New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
            <td> <input id="confirmpassword" autofocus onkeyup='check();' required name="confirmpassword" type="password"></td>
            </tr>
            <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnUserUpdate"  class="btn-flat red mt10 pure-u-1" value="Update"></td>
            </tr>
        </table>
            <br>
        </form>
    <?php } ?>
    </div> 
 </div>     
<script>
            function check()
            {
                var pass=document.getElementById('newpassword').value;
                var cpass=document.getElementById('confirmpassword').value;
                if(pass!=cpass){}
                else {
                    document.getElementById('error').innerHTML = ''; 
                    alertify.success('Password is matched'); 
                }
            }
            function callfunction()
            {
            var textBox = document.getElementById("newpassword");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<5) {
                    //document.getElementById('error').innerHTML='Please entered more than 5 characters for new password';
                    alertify.success('Please entered more than 6 characters for new password');
                } else{
                    document.getElementById('error').innerHTML = '';
                }
            }
            function show(id) {
                    var a = document.getElementById(id);
                    if (a.type == "password") {
                        a.type = "text";
                    } else {
                        a.type = "password";
                    }
                }
            function oldcheck()
            {
            var txtop= document.getElementById("oldpassword").value;
            var dbop= document.getElementById("dbold").value;
              if(txtop!=dbop){
                  alertify.success('Old Password is not Match!!!');
             }        
            }
</script> 