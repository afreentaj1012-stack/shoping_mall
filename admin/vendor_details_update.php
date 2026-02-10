<?php
include('../db_connect/dbconnect.php');
$vendor_id=$_POST['vendor_id'];
$vendor_name=$_POST['ven_name'];
$vendor_city=$_POST['ven_city'];
$vendor_address=$_POST['ven_address'];
$vendor_contact_no=$_POST['ven_contact'];
$email_id=$_POST['email_id'];
$sql="update vendor_details set vendor_name='$vendor_name',vendor_city='$vendor_city',vendor_address='$vendor_address',vendor_contact_no='$vendor_contact_no',email_id='$email_id' where vendor_id='$vendor_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are update");
document.location="vendor_details_view.php"
</script>