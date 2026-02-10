<?php
include('../db_connect/dbconnect.php');
$vendor_id=$_REQUEST['vendor_id'];
$sql="delete from  vendor_details where vendor_id='$vendor_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location=" vendor_details_view.php";
</script>

