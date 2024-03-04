<main>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">

                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Purchased Products</h6>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <!-- <th scope="col">Product Name</th> -->
                                            <!-- <th scope="col">Employee Name</th> -->
                                            <th scope="col">Date Purchased</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Cost</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($purchaseUsers as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <?php if($user->productID==$productID){
                                            ?>
                                        
                                        <!-- <td><?php echo $user->productID; ?></td> -->
                                        <!-- <td><?php echo $user->productName; ?></td> -->
                                        <!-- <td><?php echo $user->employeeID; ?></td> -->

                                        <td><?php echo $user->productID; ?></td>
                                        <td><?php echo $user->date_purchased; ?></td>
                                        <td><?php echo $user->quantity_purchased; ?></td>
                                        <td><?php echo $user->total_cost; ?> <td>
                                        <input type="text" name="productID" class="form-control" id=""
                                    placeholder="" value="<?= $productID ?>">
                                            <button class="btn btn-primary">Update</button>
                                        
                                        </td>
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    
                                </table>
                              
                                <!-- <input type="text" name="client_id" class="form-control" id="pet_color"
                                    placeholder="" value="<?= $client_id ?>">           -->
                                    <div class="modal-footer d-flex">
                                    <input type="hidden" name="productID" class="form-control" id=""
                                    placeholder="" value="<?= $productID ?>">    
                                    </div>          
                        </div>
                        
                    </div>
                    
                    </div>
                    
                        </div>
                    </div>
</main>