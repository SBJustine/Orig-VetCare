<main>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <!-- Search Bar -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="searchPetOwnerInput" placeholder="Search...">
                            </div>
                            <!-- <div class="col-md-6" style="margin-left:200px">
                                <a href="<?= base_url();?>index.php/pet_table" class="btn btn-primary">List of Pets</a>
                            </div> -->
                        </div>
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pet Owners</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($petOwner as $key => $user): ?>
                                    <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                        <td><?php echo $user->client_id; ?></td>
                                        <td><?php echo $user->client_fullname; ?></td>
                                        <td>
                                            <a href="<?= base_url();?>index.php/add_pet?client_id=<?php echo $user->client_id; ?>" class="btn btn-primary">Add pet</a>
                                            <a href="<?= base_url();?>index.php/pet_table?client_id=<?php echo $user->client_id; ?>" class="btn btn-primary">View Pets</a>
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

    <script>
        // Search Function
        document.getElementById("searchPetOwnerInput").addEventListener("input", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchPetOwnerInput");
            filter = input.value.toUpperCase();
            table = document.querySelector(".table");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Change index to the column you want to search
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</main>
