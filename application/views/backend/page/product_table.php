<main>
    <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">List of Products</h6>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Date_addded</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($productUsers as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <td><?php echo $user->productID; ?></td>
                                        <td><?php echo $user->productName; ?></td>
                                        <td><?php echo $user->cost; ?></td>
                                        <td><?php echo $user->quantity; ?></td>
                                        <td><?php echo $user->category; ?></td>
                                        <td><?php echo $user->dateAdded; ?></td>
                                        <!-- <td><?php echo $user->action; ?></td> -->
                                        <td>
                                            <button class="btn btn-primary">Update</button>
                                        
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
                    </div>
</main>