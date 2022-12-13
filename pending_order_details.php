<?php include "staticfile/top_header.php"; ?>

                <div class="container-fluid">
                
                    <div class="container-fluid">
                    <!-- <h3 class="text-dark mb-4">Orders</h3> -->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            
                            <div class="row">
                            <div class="col-md-4 col-xl-1">
                                    <div class="text-md-end "><label class="">      <p class="text-primary m-0 fw-bold">Order 1 </p> </label></div>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="text-md-end "><label class="">      <p class="text-primary m-0 fw-bold">Customer Name : Ali Ahmed </p> </label></div>
                                </div>   
                                <div class="col-md-4 col-xl-2">
                                    <div class="text-md-end "><label class="">      <p class="text-primary m-0 fw-bold">Code : 5246</p> </label></div>
                                </div>  
                            </div> 
                        </div>
                        
                        <div class="card-body">
                        <div class="row">
                            
                                <!-- <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div> -->
                            </div>
                         
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>Product ID</th> 
                                            <th>Product</th>  
                                            <th>Brand</th> 
                                            <th>Qty</th> 
                                            <th>Price</th>  
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody> 
                                  <tr><td>1</td>
                                    <td>T-shir</td>
                                    <td>Zara</td>
                                    <td>2</td>
                                    <td>50$</td></tr>
                                    <tr><td>2</td>
                                    <td>Adress</td>
                                    <td>Koton</td>
                                    <td>1</td>
                                    <td>190$</td></tr>
                                    <!-- <tr><td>Order dated : 20/1/2022</td></tr>  -->


                                   </tbody>
                                  
                                </table>
                            </div>
                            <div class="row">
                            <div class="col-md-8 col-xl-3">
                                <h5>Order Details</h5>
                                <h6>Order Number : 100</h6>
                                <h6>Order Date : 22 Dec,2019</h6>
                                <h6>Receh6its Order : Omer Ali</p>
                                   </div>
                            <div class="col-md-8 col-xl-3 text-nowrap">
                                    <div class="text-md-end "><label class=""> 
        
                                </label></div>
                                </div>
                                <div class="col-md-8 col-xl-3  text-nowrap text-md-end" >
                              

                                </div>
                                <div class="col-md-8 col-xl-2  text-nowrap text-md-end">
<h6>Total $898.00</h6>
<h6 >Discount $19.00</h6>
<h6>Delivery Charges Free</h6>
                         </div>
                               
                            </div> 
                        
                            
                        </div>
                        
                    </div>
                    <div class="card-header py-3">
                            
                            <div class="row">
                            <div class="col-md-8 col-xl-3">
                                   </div>
                            <div class="col-md-8 col-xl-1">
                                    <div class="text-md-end "><label class=""> 
                             <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px; background:white; color:black"  data-toggle="modal" data-target="#printModel" >Print</button></div>
        
                                </label></div>
                                </div>
                                <div class="col-md-8 col-xl-2  text-nowrap" >
                              
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px; background:white; color:black"  >Complete Order</button></div>

                                </div>
                
                                
                                <div class="col-md-8 col-xl-2  text-nowrap">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="padding-left:20px; padding-right:20px"> Send to Iraq </button></div>
                                </div>
                               
                            </div> 
                        </div>
              </div>
            </div>
            </div>

            <?php include "staticfile/footer.php"; ?>
