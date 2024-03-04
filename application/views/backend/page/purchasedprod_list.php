<main>
    <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                <div class="col-12">

                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($purchasedprod_list as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <!-- <td><?php echo $user->owner_id; ?></td> -->
                                        <td><?php echo $user->productID; ?></td>
                                      <td><?php echo $user->productName; ?></td>
                                      
                                      <!--base_url('your_controller/your_method?user_id=' . $user_id);-->

                                      <td> <a href="<?= base_url();?>index.php/purchase_form?productID=<?php echo $user->productID; ?>" class="btn btn-primary">Purchase</a>
                                      <a href="<?= base_url();?>index.php/purchase_table?productID=<?php echo $user->productID; ?>" class="btn btn-primary">Products Purchased</a>
                                    </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                        </div>
           
</main>