<main>
<div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">

                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registered Pets</h6>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Breed</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Species</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($petUsers as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <td><?php echo $user->pet_id; ?></td>
                                        <td><?php echo $user->pet_name; ?></td>
                                        <td><?php echo $user->pet_breed; ?></td>
                                        <td><?php echo $user->pet_age; ?></td>
                                        <td><?php echo $user->pet_gender; ?></td>
                                        <td><?php echo $user->pet_species; ?>
                                        <td><?php echo $user->pet_color; ?>
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
</main>