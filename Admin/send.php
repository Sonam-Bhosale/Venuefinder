<?php
include 'includes/db_connect.php';
$vid=$_GET['vid'];
$pid=$_GET['pid'];
$sql="select * from tbl_vendor where vendor_id='$vid'";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{
    $mobile=$row['mobile'];
}
$sql="select *,date(start_date) as sdate,date(expire_date) as edate from venue_plan where id='$pid' ";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{
   
    $start_date=$row['sdate'];
    $start_ts=strtotime($start_date);
    $activated_date=date('d-m-Y',$start_ts);
    $enddate=$row['edate'];
    $end_ts=strtotime($enddate);
    $end_date=date('d-m-Y',$end_ts);
    $today=date('d-m-Y');
    if(strtotime($today) < strtotime($end_date))
    {
        $diff=strtotime($end_date)-strtotime($today);
        $remain=abs(floor($diff/86400));
    }else{
        $remain='to';
    }
}
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "\r\nFrom VenueFinder:\r\nYour plan will expired in $remain day.\r\nFor more details visit to website.\r\nThank You!!!",
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
}if($result==true)
{
    echo "<script> alert('Notification successfully sent to vendor !!!')</script>";
    echo "<script>window.location.href='purchase.php';</script>";	    
}
else{
    echo "Error:".$connect->error;
}

