<?php include "staticfile/top_header.php"; ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Complete Orders</h6>
    </div>
    <div class="card-body">
    <div class="row">
           
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Enter the Code Order"></label></div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                        <th>ID</th>
                        <th>Customer name</th>
                        <th>Num. of product</th>
                        <th>Cost </th>
                        <th>Goverment </th>
                       
                    </tr>
                </thead>
            
                <tbody>
                <tr>
                    <td>1</td>
                        <td>Ahmed Ali</td>
                        <td>6</td>
                      
                        <td>60$</td>
                        <td>15</td>
                    </tr>
                 
                    
             
                </tbody>
            </table>
        </div>
                            
                            <div class="row">
                            <div class="col-md-8 col-xl-2">
                                   </div>
                            <div class="col-md-8 col-xl-1">
                                    <div class="text-md-end "><label class=""> 
        
                                </label></div>
                                </div>
                                <div class="col-md-8 col-xl-1  text-nowrap" >
                              

                                </div>
                
                                
                                <div class="col-md-8 col-xl-2  text-nowrap">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px"> Send a message to the customer to receive an order </button></div>
                                </div>
                               
                            </div> 
              
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
            <?php include "staticfile/footer.php"; ?>
