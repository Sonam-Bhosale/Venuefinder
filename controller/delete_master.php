<?php include("../include/db_connect.php");?>
<?php
 $id = $_GET['id']; 
 $type = $_GET['type']; 
 $name=$_GET['name'];
 $vid=$_GET['vid'];
 $token=$_GET['token'];
 
switch($type)
{
	case 'vendor':
				$sql="delete from tbl_vendor where vendor_id='$id'";
				if(mysqli_query($connect,$sql))
				{
					echo "<script>alert('Vendor having id $id has been deleted!!')</script>";
					echo "<script>window.location.href='../Admin/manage_vendor.php'</script>";
				}
				else
				{
					echo "Error deleting record :".mysqli_error($connect);
				}
                break;
    case 'plan':
                $sql="delete from subscription_plan where plan_id='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Plan having plan id $id has been deleted')</script>";
                    echo "<script>window.location.href='../Admin/plan.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
                break;
    case 'venueservice':
                $sql="delete from venue_details where venue_id='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Venue having id $id has been deleted')</script>";
                    echo "<script>window.location.href='../venue holder/venue_details.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
                break;  
    case 'album':
                $sql="delete from images where album_name='$name'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Album having name $name has been deleted')</script>";
                    echo "<script>window.location.href='../venue holder/images.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
                break;  
    case 'video':
                $sql="delete from videos where video_id='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Video having id $id has been deleted')</script>";
                    echo "<script>window.location.href='../venue holder/videos.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
                break;  
    case 'wishlist':
              
                $sql="delete from wishlist where venue_id='$vid' and userid='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Venue having id $vid has been removed from wishlist')</script>";
                    echo "<script>window.location.href='../showwishlist.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
                break; 
    case 'quotation':
                 $sql="delete from venue_enquires where token='$token' and user_id='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Quotation having token $token has been removed')</script>";
                    echo "<script>window.location.href='../enquires.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }
              
                break; 
    case 'event':
    
                $sql="delete from event_master where venue_id='$vid' and id='$id'";
                if(mysqli_query($connect,$sql))
                {
                    echo "<script>alert('Event having id $id has been removed')</script>";
                    echo "<script>window.location.href='../venue holder/event.php'</script>";
                }
                else
                {
                    echo "Error deleting record :".mysqli_error($connect);
                }

                break; 
   
}


?>