<?php include('meta_tag.php'); ?>


 <?php include('top_bar.php'); ?>

      <?php include('menu_bar.php'); ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                              
                            </div>
                            <h4 class="page-title">My Customer(Hospital) Order </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">My Order Details </h4>
                                 

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No </th>
    <th>Customer Name </th>
    <th>Product Name </th>
    <th>Quantity</th>
    <th>Rate</th>
	 <th>Total Amount</th>
    <th>Status</th>
    <th>Order Date </th>
    <th>Pay Now</th>
    
  </tr>
  </thead>
  <tbody>
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$uname=$_SESSION['uname'];
$sql="select * from customer_order co,customer_details cd,product_catalog pc where co.customer_id=cd.customer_id and co.product_id=pc.product_id and cd.email_id='$uname'";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['customer_name']; ?></td>
    <td>&nbsp;<?php echo $row['product_name']; ?></td>
    <td>&nbsp;<?php echo $row['quantity']; ?></td>
    <td>&nbsp;<?php echo $row['rate']; ?></td>
	<td>&nbsp;<?php echo ($row['quantity']*$row['rate']); ?></td>
    <td>&nbsp;<?php echo $row['order_status']; ?></td>
    <td>&nbsp;<?php echo $row['order_date']; ?></td>
    <td><?php if($row['order_status']=='Processing') { ?><p class="btn btn-primary"><?php echo $row['order_status']; ?></p> <?php } else { ?><a href="customer_payment_form.php?amount=<?php echo ($row['quantity']*$row['rate']); ?>&cust_order_id=<?php echo $row['cust_order_id']; ?>&customer_name=<?php echo $row['customer_name']; ?>&email_id=<?php echo $row['email_id']; ?>&contact_no=<?php echo $row['contact_no']; ?>&quantity=<?php echo $row['quantity']; ?>&product_id=<?php echo $row['product_id']; ?>" class="btn btn-success">Pay Now</a> <?php } ?></td>
  </tr> 
  <?php
  
  }
  ?>
  
  
                          </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>