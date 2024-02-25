<main>
    <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Attendance Table</h6>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Number of Days Present</th>
                                            <th scope="col">Number of Days Absent</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($attendance_table as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <!-- <td><?php echo $user->admin_id; ?></td> -->
                                        <td><?php echo $user->employeeID; ?></td>
                                        <td><?php echo $user->employeeName; ?></td>
                                        
                                        <td>
                                            <!-- <button class="btn btn-primary">Update</button>
                                         -->
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