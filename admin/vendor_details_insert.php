<?php
include('../db_connect/dbconnect.php');
$vendor_name=$_POST['ven_name'];
$vendor_city=$_POST['ven_city'];
$vendor_address=$_POST['ven_address'];
$vendor_contact_no=$_POST['ven_contact'];
$email_id=$_POST['email_id'];
$sql="insert into vendor_details values(null,'$vendor_name','$vendor_city','$vendor_address','$vendor_contact_no','$email_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="vendor_details_view.php"
</script>