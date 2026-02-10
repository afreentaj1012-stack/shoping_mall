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
                            <h4 class="page-title">Vendor Supply Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              <a href="vendor_supply_details_form.php" class="btn btn-primary">ADD NEW VENDOR SUPPLY</a>
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Vendor name</th>
    <th>Product name</th>
    <th>Quantity</th>
    <th>Purchase rate</th>
	<th>Total Amount</th>
    <th>Supply date </th>
    <th>Status</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $tot=0;
  $sql="select * from vendor_supply_details vs,vendor_details vd,product_catalog pc where vs.vendor_id=vd.vendor_id and vs.product_id=pc.product_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+($row['purchase_rate']*$row['quantity']);
  ?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['vendor_name'];?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['purchase_rate'];?></td>
	<td>&nbsp;<?php echo $row['purchase_rate']*$row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['supply_date'];?></td>
    <td>&nbsp;<?php echo $row['status'];?></td>
    <td><a href="vendor_supply_details_delete.php?vendor_supply_id=<?php echo $row['vendor_supply_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  </tr>
  
  <?php
  }
  ?>
  </tbody>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<b>Total</b></td>
    <td>&nbsp;<b><?php echo $tot; ?></b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
 </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>

