<main>
    <style>
        .arrow {
            float: right;
        }
    </style>
    
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">List of Products</h6>
                        <div class="table-responsive">
                        <div class="d-flex justify-content-end mb-3">
                        <!-- <div class="form-group" id="productTable" >
                            <input type="text" class="form-control" id="productTable" placeholder="Search...">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="filterTable()" id="productTable">Search</button> -->
                    </form>
                        </div>
                            <table class="table text-start align-middle table-bordered table-hover mb-0" id="productTable" >
                                <thead>
                                    <tr>
                                        <th scope="col" onclick="sortTable('productTable', 0)">
                                            #
                                            <span class="arrow" data-column="0">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable('productTable', 1)">
                                            Product Name
                                            <span class="arrow" data-column="1">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable('productTable', 2)">
                                            Cost
                                            <span class="arrow" data-column="2">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable('productTable', 3)">
                                            Quantity
                                            <span class="arrow" data-column="3">&#9650;</span>
                                        </th>
                                        <th>
                                            Category
                                            <span class="arrow" data-column="4"></span>
                                        </th>
                                        <th scope="col" onclick="sortTable('productTable', 5)">
                                            Date Added
                                            <span class="arrow" data-column="5">&#9650;</span>
                                        </th>
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
    
    <script>
        function sortTable(tableId, columnIndex) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById(tableId);
            switching = true;
            var sortOrder = table.rows[0].getElementsByTagName("th")[columnIndex].querySelector(".arrow").getAttribute("data-sort");
            
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("td")[columnIndex];
                    y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                    
                    if (columnIndex === 0 || columnIndex === 2 || columnIndex === 3) {
                        // For numeric sorting
                        if (sortOrder === "asc") {
                            if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
                                shouldSwitch = true;
                                break;
                            }
                        } else {
                            if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
                                shouldSwitch = true;
                                break;
                            }
                        }
                    } else {
                        // For string sorting
                        if (sortOrder === "asc") {
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        } else {
                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
            // Toggle sorting order
            var newSortOrder = sortOrder === "asc" ? "desc" : "asc";
            table.rows[0].getElementsByTagName("th")[columnIndex].querySelector(".arrow").setAttribute("data-sort", newSortOrder);
            
            // Update arrow icon
            var arrow = table.rows[0].getElementsByTagName("th")[columnIndex].querySelector(".arrow");
            if (newSortOrder === "asc") {
                arrow.innerHTML = "&#9650;";
            } else {
                arrow.innerHTML = "&#9660;";
            }
        }
    </script>

<script>
    $(document).ready(function () {
      $('#productTable').DataTable();
    });
  </script>
</main>
