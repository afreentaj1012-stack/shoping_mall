<?php
include('../db_connect/dbconnect.php');
$vendor_supply_id=$_POST["vendor_supply_id"];
$vendor_id=$_POST["ven_id"];
$product_id=$_POST["pro_id"];
$quantity=$_POST["quantity"];
$purchase_rate=$_POST["purchase_rate"];
$supply_date=$_POST["date"];
$status=$_POST["status"];
$sql="update vendor_supply_details set vendor_id='$vendor_id',product_id='$product_id',quantity='$quantity',purchase_rate='$purchase_rate',supply_date='$supply_date',status='$status' where vendor_supply_id='$vendor_supply_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="vendor_supply_details_view.php"
</script>
