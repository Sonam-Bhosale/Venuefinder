<?php
 include("include/db_connect.php");

$token=$_GET['token'];

$sql="select * from venue_enquires,register_user,register_venue where venue_enquires.user_id=register_user.user_id and venue_enquires.venue_id=register_venue.user_id and token='$token'"; 
 
$result=$connect->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>VenueFinder</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
    <div class="container">
<div class="bs-example">
    <div class="row">
        <div class="col">
            <img src="Style/logo.png" alt="logo" height="100">
        </div>
        <div class="col" align="right">
            <h3 class="name">To,</h3>
                <?php echo $row['user_name']; ?><br>
            <?php echo $row['address']; ?><br><?php echo $row['mobile']; ?><br>
           </div>
    </div><br>
   

    <form action="Controller/quotation_submit.php?token=<?php echo $token; ?>" method="post">
        <table id="sorting-table" class="table mb-0">
            
            <tbody> <input type="hidden" value="<?php echo $row['user_email']; ?>" name="email">
                    <tr>
                        <td colspan="4"><h3 align="center"><?php echo $row['venue_name']; ?></h3>
                        <p align="center">Request for the quotation of your venue requirement are below,</p></td>
                    </tr>
                    <tr>
                        <td colspan="3"  align="right"><b>Requirement</b></td>
                        <td align="right"><input type="text" name="requirement" value="<?php echo $row['requirement']; ?>" class="form-control"  readonly></td>
                    </tr>
                    <tr>
                        <td colspan="3"  align="right"><b>Rate</b></td>
                        <td align="right"><input type="nuber" name="rate" class="form-control"></td>
                    </tr>
                  
                    <tr>
                        <td colspan="4" align="center"><br>
                             <input type="submit" name="btnsave" class="btn btn-primary" value="Save">
                        </td>
                    </tr>
             </tbody>
        </table>
    </form>
</div>
</div>
</body>
</html>
<?php 
    } 
}
?>