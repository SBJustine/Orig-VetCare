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
                                            <th scope="col">Pet Owners</th>
                                            <th scope="col"></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($petOwner as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <!-- <td><?php echo $user->owner_id; ?></td> -->
                                        <td><?php echo $user->client_id; ?></td>
                                      <td><?php echo $user->client_fullname; ?></td>

                                      <td> <a href="<?= base_url();?>index.php/add_pet" class="btn btn-primary">Add pet</a>
                                       <a href="<?= base_url();?>index.php/pet_table" class="btn btn-primary">View Pets</a>
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