<?php
include('../db_connect/dbconnect.php');
$vendor_payment_id=$_POST["vendor_payment_id"];
$vendor_id=$_POST["ven_id"];
$payment_no=$_POST["pay_no"];
$amount=$_POST["amount"];
$mode_of_payment=$_POST["mode_of_pay"];
$bank_name=$_POST["bank_name"];
$cheque_dd_no=$_POST["cheque_dd_no"];
$given_date=$_POST["given_date"];
$sql="update vendor_payments set vendor_id='$vendor_id',payment_no='$payment_no',amount='$amount',mode_of_payment='$mode_of_payment',bank_name='$bank_name',cheque_dd_no='$cheque_dd_no',given_date='$given_date' where vendor_payment_id='$vendor_payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="vendor_payment_view.php"
</script>