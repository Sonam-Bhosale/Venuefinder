<?php include('sidenavbar.php' );?>

<h3 class="homeSection__title">Update Profile</h3><hr class="mt20 medium bold">
<?php 

$id=$_SESSION['User'];
//echo $id;
    $sql = "SELECT * FROM register_user where user_id=$id";
    $result=$connect->query($sql);
    while($row = $result->fetch_array())
    {
?>
<h5>&nbsp;&nbsp;&nbsp;Last Modified:- <?php echo $row['updated_at'];?></h5>
<form action='controller/credentials.php' method="post">
<table align="center" width="500px">
    <tr align="right"></tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
        <td>
            <input type="text" class="pure-u-1" id="user_name" name="name" value="<?php echo $row['name']; ?>" required placeholder="Sai Vijay Shinde"  autofocus onblur="onLeave()">
        </td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;User Name &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
        <td> 
            <input type="text" class="pure-u-1" id="uname"  name="user_name" value="<?php echo $row['user_name']; ?>" required  placeholder="Sai123" autofocus>
        </td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</h4></td>
        <td><input type="text"  class="pure-u-1" name="mobile" value="<?php echo $row['mobile']; ?>"  placeholder="9830750890" required data-max=10  pattern="\d{10}" minlength="10" maxlength="10" autofocus onchange="myfun1()" onkeypress="return isNumberKey1(event)"></td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp; </h4></td>
        <td>                              
              <input type="email" class="pure-u-1"  id="email" name="email" value="<?php echo $row['email']; ?>" placeholder="sai26@gmail.com" required autofocus>
        </td>
    </tr>
    <tr>
        <td><h4>&nbsp;&nbsp;Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp; </h4></td>
        <td><textarea required class="pure-u-1" rows="3"  name="address" value="<?php echo $row['address']; ?>" ><?php echo $row['address']; ?></textarea></td>
    </tr>
    <tr>
              <td colspan="2" align="center"><input type="submit" name="btnProfile"  class="btn-flat red mt10 pure-u-1" value="Update"></td>
    </tr>
</table>
<br>
</form>
    <?php } ?>
</div> 
            </div>  