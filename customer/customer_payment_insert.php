<?php
include('../db_connect/dbconnect.php');
$cust_order_id=$_POST['cust_order_id'];

$total_amount=$_POST['total_amount'];
$dat=$_POST['dat'];
$cust_order_id=$_POST['cust_order_id'];
$quantity=$_POST['cust_order_id'];
$product_id=$_POST['product_id'];

$sql="insert into customer_payments values(null,'$cust_order_id','$total_amount','PAID','$dat','".$_POST['razorpay_payment_id']."')";
mysqli_query($conn,$sql);

$sql1="update customer_order set  order_status='Processing' where cust_order_id='$cust_order_id' ";
mysqli_query($conn,$sql1);

$sql3="update  stock_details set stock= stock -'$quantity' where product_id='$product_id'";
mysqli_query($conn,$sql3);



?>


<script>
alert("Payment Done Successfully...");
document.location="customer_order_view.php";


</script>