<?php include("../include/db_connect.php");?>
<?php
//admin edit venue
if(isset($_POST['btnUpdatevendor']))
	{
		$id=$_POST['vendor_id'];
        $user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
		$mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
        $email= mysqli_real_escape_string($connect,$_POST['email']);
        $address= mysqli_real_escape_string($connect,$_POST['address']);
        $status=mysqli_real_escape_string($connect,$_POST['status']);
        $date=date('Y-m-d');
        $updateSQL ="Update tbl_vendor set 
        name='$user_name',email='$email',updated_at='$date',mobile='$mobile', address='$address', status='$status' where vendor_id='$id'";
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Vendor details updated successfully !!')</script>";
			echo "<script>window.location.href='../Admin/manage_vendor.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}	
	}
	//edit holder services 
	if(isset($_POST['btnUpdateservice']))
	{
		$id= $_POST['venue_id'];
        $venue_info= mysqli_real_escape_string($connect,$_POST['venue_info']);
        $seating_capacity= mysqli_real_escape_string($connect,$_POST['seating_capacity']);
        $chair= mysqli_real_escape_string($connect,$_POST['chair']); 
        $room= mysqli_real_escape_string($connect,$_POST['room']);
        $parking= mysqli_real_escape_string($connect,$_POST['parking']);
        $water= mysqli_real_escape_string($connect,$_POST['water']);
        $catering= mysqli_real_escape_string($connect,$_POST['catering']);
        $decoration= mysqli_real_escape_string($connect,$_POST['decoration']);
        $sound= mysqli_real_escape_string($connect,$_POST['sound']);
		$fan= mysqli_real_escape_string($connect,$_POST['fan']);
		$date=date('yy-m-d h:i:s');
		$sql="update venue_details set updated_at='$date',venue_info='$venue_info', chair='$chair',seating_capacity='$seating_capacity', room='$room',parking='$parking',drink_water='$water',catering='$catering',decoration='$decoration',sound_system='$sound',ac_fan='$fan' where venue_id='$id'";
        $result=mysqli_query($connect,$sql);
        if($result==true)
        { 
			echo "<script>alert('Details updated !!!')</script>";
            echo "<script>window.location.href='../Venue Holder/venue_details.php';</script>";	  
        }
        else{
            echo "Error:".$connect->error;
        }
	}

	
	//admin profile
	if(isset($_POST['btnAdminProfile']))
	{
		$name=$_SESSION['admin'];
		$user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
		$mobile= mysqli_real_escape_string($connect,$_POST['mobile']);		
        $email= mysqli_real_escape_string($connect,$_POST['email']);
		$date=date('Y-m-d');
        $updateSQL ="Update tbl_admin set 
        name='$user_name', updated_at='$date',mobile='$mobile',email='$email' where name='$user_name'";
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Admin profile updated successfully!!!')</script>";
			echo "<script>window.location.href='../Admin/profile.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}	
	}
	//holder profile
	if(isset($_POST['btnProfile']))
	{
		$id=$_SESSION['venue_id'];
		$user_name= mysqli_real_escape_string($connect,$_POST['user_name']);
        $mobile= mysqli_real_escape_string($connect,$_POST['mobile']);
		$email= mysqli_real_escape_string($connect,$_POST['email']);
		$address= mysqli_real_escape_string($connect,$_POST['address']);
		
		$date=date('Y-m-d');
        $updateSQL ="Update tbl_vendor set 
        name='$user_name',updated_at='$date',mobile='$mobile',email='$email', address='$address' where vendor_id=$id";
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Profile updated successfully !!!')</script>";
			echo "<script>window.location.href='../Venue Holder/profile.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}	
	}
	//edit venue
	if(isset($_POST['btnupdatevenue']))
	{
		$id=$_SESSION['venue_id'];
		$vid=$_POST['vid'];
        $venue_name= mysqli_real_escape_string($connect,$_POST['venue_name']);
		$email= mysqli_real_escape_string($connect,$_POST['email']);
		$landline= mysqli_real_escape_string($connect,$_POST['landline']);
		$booking_amt= mysqli_real_escape_string($connect,$_POST['booking_amt']);
		$address= mysqli_real_escape_string($connect,$_POST['address']);
		$date=date('Y-m-d');
		$target_file='uploads/logo';
		$imagetmp=$_FILES['logo']['name'];
		$imagetmp_temp=$_FILES['logo']['tmp_name'];
		$location = $target_file.$_FILES['logo']['name']; 
		$imagetmp1=$_FILES['userfile']['name'];
		$imagetmp1_temp=$_FILES['userfile']['tmp_name'];
		$location1 = $target_file.$_FILES['userfile']['name']; 				
		if($imagetmp !="")  {
			move_uploaded_file($_FILES['logo']['tmp_name'], $location);
			move_uploaded_file($_FILES['userfile']['tmp_name'], $location1);
		$updateSQL ="Update tbl_venue set 
        venue_name='$venue_name', landline='$landline',booking_amt='$booking_amt',updated_at='$date', venue_address='$address',logo='$imagetmp',banner_image='$imagetmp1' where venue_id='$vid' and vendor_id='$id'";
	
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Venue updated successfully !!!')</script>";
			echo "<script>window.location.href='../Venue Holder/add_venue.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}	
		}  
		else{
			$updateSQL ="Update tbl_venue set 
        venue_name='$venue_name', landline='$landline',booking_amt='$booking_amt',updated_at='$date', venue_address='$address' where venue_id='$vid' and vendor_id='$id'";
	
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Venue updated successfully !!!')</script>";
			echo "<script>window.location.href='../Venue Holder/add_venue.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}	

		} 
		
		
		
		
	}
	//edit event
	if(isset($_POST['btnUpdateEvent']))
	{
		$vid=$_SESSION['venue_id'];
		$eid=$_POST['id'];
		$event= mysqli_real_escape_string($connect,$_POST['event_name']);
    	$price= mysqli_real_escape_string($connect,$_POST['price']);
		$advance= mysqli_real_escape_string($connect,$_POST['advance']);
		$date=date('Y-m-d');
		$sql="update event_master set updated ='$date',event_name='$event',price='$price',advance='$advance' where id='$eid' and venue_id='$vid'";
		if(mysqli_query($connect, $sql))
		{
			echo "<script>alert('Update successfully !!')</script>";
			echo "<script>window.location.href='../Venue Holder/event.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}
	}
	//edit plan
	if(isset($_POST['btnPlan']))
	{
        $id=$_POST['planid'];
		$plan_name= mysqli_real_escape_string($connect,$_POST['plan_name']);
    	$six_month= mysqli_real_escape_string($connect,$_POST['six_month']);
		$year= mysqli_real_escape_string($connect,$_POST['year']);
		
		$date=date('yy-m-d h:i:s');
		$updateSQL ="Update subscription_plan set updated_at='$date',plan_name='$plan_name',three_month='$six_month',yearly='$year' where plan_id='$id'";
		if(mysqli_query($connect, $updateSQL))
		{
			echo "<script>alert('Plan updated successfully !!!')</script>";
			echo "<script>window.location.href='../Admin/plan.php'</script>";
		}
		else
		{
			echo" Error:".$connect->error;
		}
	}
	//faq insert
	if(isset($_POST['btnFaq']))
	{
		$id=$_SESSION['venue_id'];
		$sql="select * from tbl_faq where venue_id='$id'";
		$r=mysqli_query($connect,$sql);
		$row_count=mysqli_num_rows($r);
		if($row_count>0)
		{
			echo "<script>alert('FAQs already added !!update only')</script>";
			echo "<script>window.location.href='../venue holder/faq.php'</script>";
		}	
		else{ 	
			$f1= mysqli_real_escape_string($connect,$_POST['faq1']);
			$f2= mysqli_real_escape_string($connect,$_POST['faq2']);
			$f3= mysqli_real_escape_string($connect,$_POST['faq3']);
			$f4= mysqli_real_escape_string($connect,$_POST['faq4']);
			$f5= mysqli_real_escape_string($connect,$_POST['faq5']);
			$f6= mysqli_real_escape_string($connect,$_POST['faq6']);
			$sql="insert into tbl_faq(venue_id,f1,f2,f3,f4,f5,f6)values('$id','$f1','$f2','$f3','$f4','$f5','$f6')";
			$result=mysqli_query($connect,$sql);
			if($result)
			{
				echo "<script>alert('FAQ details inserted!!')</script>";
				echo "<script>window.location.href='../venue holder/faq.php'</script>";
			}
			else
			{
				echo" Error:".$connect->error;
			}
		}

	}
	//update faq 
	if(isset($_POST['btnupdatefaq']))
	{
		$id=$_SESSION['venue_id'];
		$sql="select * from tbl_faq where venue_id='$id'";
		$r=mysqli_query($connect,$sql);
		$row_count=mysqli_num_rows($r);
		if($row_count==0)
		{
			echo "<script>alert('Insert FAQ first then update')</script>";
			echo "<script>window.location.href='../venue holder/faq.php'</script>";
		}	
		else{ 	
			$f1= mysqli_real_escape_string($connect,$_POST['faq1']);
			$f2= mysqli_real_escape_string($connect,$_POST['faq2']);
			$f3= mysqli_real_escape_string($connect,$_POST['faq3']);
			$f4= mysqli_real_escape_string($connect,$_POST['faq4']);
			$f5= mysqli_real_escape_string($connect,$_POST['faq5']);
			$f6= mysqli_real_escape_string($connect,$_POST['faq6']);
			$sql="update tbl_faq set f1='$f1',f2='$f2',f3='$f3',f4='$f4',f5='$f5',f6='$f6' where venue_id='$id'";
			$result=mysqli_query($connect,$sql);
			if($result)
			{
				echo "<script>alert('FAQ details updated !!')</script>";
				echo "<script>window.location.href='../venue holder/faq.php'</script>";
			}
			else
			{
				echo" Error:".$connect->error;
			}
		}

	}
	//about insert
	if(isset($_POST['btnAbout']))
	{
		$id=$_SESSION['venue_id'];
		$sql="select * from tbl_about where venue_id='$id'";
		$r=mysqli_query($connect,$sql);
		$row_count=mysqli_num_rows($r);
		if($row_count>0)
		{
			echo "<script>alert('About information already filled!!! update only')</script>";
			echo "<script>window.location.href='../venue holder/about_us.php'</script>";
		}	
		else{ 	
			$website= mysqli_real_escape_string($connect,$_POST['website']);
			$date= mysqli_real_escape_string($connect,$_POST['date']);
			$events= mysqli_real_escape_string($connect,$_POST['events']);
			$helpers= mysqli_real_escape_string($connect,$_POST['helpers']);
			$info= mysqli_real_escape_string($connect,$_POST['info']);
			$sql="insert into tbl_about(venue_id,website,opening_date,events,helpers,info)values('$id','$website','$date','$events','$helpers','$info')";
			$result=mysqli_query($connect,$sql);
			if($result)
			{
				echo "<script>alert('About information inserted !!')</script>";
				echo "<script>window.location.href='../venue holder/about_us.php'</script>";
			}
			else
			{
				echo" Error:".$connect->error;
			}
		}

	}
	//update faq 
	if(isset($_POST['btnupdateabout']))
	{
		$id=$_SESSION['venue_id'];
		$sql="select * from tbl_about where venue_id='$id'";
		$r=mysqli_query($connect,$sql);
		$row_count=mysqli_num_rows($r);
		if($row_count==0)
		{
			echo "<script>alert('Insert about info first then update !!')</script>";
			echo "<script>window.location.href='../venue holder/about_us.php'</script>";
		}	
		else{ 	
			$website= mysqli_real_escape_string($connect,$_POST['website']);
			$date= mysqli_real_escape_string($connect,$_POST['date']);
			$events= mysqli_real_escape_string($connect,$_POST['events']);
			$helpers= mysqli_real_escape_string($connect,$_POST['helpers']);
			$info= mysqli_real_escape_string($connect,$_POST['info']);
			$sql="update tbl_about set website='$website',opening_date='$date',events='$events',helpers='$helpers',info='$info' where venue_id='$id'";
			$result=mysqli_query($connect,$sql);
			if($result)
			{
				echo "<script>alert('About info update !!')</script>";
				echo "<script>window.location.href='../venue holder/about_us.php'</script>";
			}
			else
			{
				echo" Error:".$connect->error;
			}
		}

	}
	
?>
	