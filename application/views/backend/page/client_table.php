<main>
    <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registered Client</h6>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fullname</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Sex</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date_addded</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($clientUsers as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <td><?php echo $user->client_id; ?></td>
                                        <td><?php echo $user->client_fullname; ?></td>
                                        <td><?php echo $user->client_address; ?></td>
                                        <td><?php echo $user->phone_number; ?></td>
                                        <td><?php echo $user->sex; ?></td>
                                        <td><?php echo $user->client_email; ?></td>
                                        <td><?php echo $user->password; ?></td>
                                        <td><?php echo $user->client_status; ?></td>
                                        <td><?php echo $user->date_added; ?></td>
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