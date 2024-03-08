<main>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <!-- Search Bar -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="searchProductInput" placeholder="Search...">
                            </div>
                        </div>
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
                                        <td><?php echo $user->productID; ?></td>
                                        <td><?php echo $user->productName; ?></td>
                                        <td>
                                            <a href="<?= base_url();?>index.php/purchase_form?productID=<?php echo $user->productID; ?>" class="btn btn-primary">Purchase</a>
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

    <script>
        // Search Function
        document.getElementById("searchProductInput").addEventListener("input", function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchProductInput");
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
