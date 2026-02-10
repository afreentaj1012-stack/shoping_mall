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
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Customer Order </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Order </h4>
                                 <a href="customer_order_form.php" class="btn btn-info">Add</a><p></p>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No </th>
    <th>Customer Name </th>
    <th>Product Name </th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Status</th>
    <th>Order Date </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$sql="select * from customer_order co,customer_details cd,product_catalog pc where co.customer_id=cd.customer_id and co.product_id=pc.product_id";
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
    <td>&nbsp;<?php echo $row['order_status']; ?></td>
    <td>&nbsp;<?php echo $row['order_date']; ?></td>
    <td><a href="customer_order_edit.php?cust_order_id=<?php echo $row['cust_order_id']; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="customer_order_delete.php?cust_order_id=<?php echo $row['cust_order_id']; ?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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