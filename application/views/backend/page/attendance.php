<main>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <!-- Button List of Attendance -->
                        <div class="d-flex justify-content-end mb-3">
                            <a href="<?= base_url();?>index.php/attendance_table" class="btn btn-primary">List of Attendance</a>
                        </div>

                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Employee</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($attendance as $key => $user): ?>
                                <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                    <!-- <td><?php echo $user->owner_id; ?></td> -->
                                    <td><?php echo $user->employeeID; ?></td>
                                    <td><?php echo $user->employeeName; ?></td>
                                    <td>
                                        <a href="<?= base_url();?>index.php/attendance_table" class="btn btn-primary">Present</a>
                                        <a href="<?= base_url();?>index.php/attendance_table" class="btn btn-primary">Absent</a>
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
