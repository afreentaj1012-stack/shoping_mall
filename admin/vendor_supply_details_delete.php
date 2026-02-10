<?php
include('../db_connect/dbconnect.php');
$vendor_supply_id=$_REQUEST['vendor_supply_id'];
$sql="delete from vendor_supply_details where vendor_supply_id='$vendor_supply_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location="vendor_supply_details_view.php";
</script>
