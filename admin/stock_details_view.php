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
                            <h4 class="page-title">Stock Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Product name</th>
    <th>Stock</th>
   
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $tot=0;
 $sql="select * from stock_details st, product_catalog p where st.product_id=p.product_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
 
  ?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['stock'];?></td>
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

