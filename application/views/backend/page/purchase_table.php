 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">                  
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Purchase Product</h6>
                            <form action="<?= base_url() ?>index.php/purchase_table" method="post">

                            <div class="form-floating mb-3">
                                <input type="" name="pet_name" class="form-control" id="pet_name"
                                    placeholder="">
                                <label for="floatingInput">Pet Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="employeeName" class="form-control" id="employeeName"
                                    placeholder="">
                                <label for="floatingInput">Employee Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="datetime-local" name="date_purchased" class="form-control" id="date_purchased" value="<?php echo date('Y-m-d\TH:i'); ?>" required>
                                <label for="floatingInput">Date Purchased</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="quantity_purchased" class="form-control" id="quantity_purchased"
                                    placeholder="">
                                <label for="floatingInput">Quantity</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="total_cost" class="form-control" id="total_cost"
                                    placeholder="">
                                <label for="floatingInput">Cost</label>
                            </div>

                            


                            <div class="modal-footer d-flex">
                                <style>
                                    /* Custom CSS to change the button color to maroon */
                                    .btn-maroon {
                                        background-color: maroon;
                                        color: white;
                                    }
                                </style>
                            
                                <input type="submit" class="btn btn-maroon custom-button" value="Create">
                            </div>
                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender Reminder</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    </div>
                    </div>
                    