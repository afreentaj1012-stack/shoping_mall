<?php
include('../db_connect/dbconnect.php');
$vendor_payment_id=$_REQUEST['vendor_payment_id'];
$sql="delete from vendor_payments where vendor_payment_id='$vendor_payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location="vendor_payment_view.php";
</script>
