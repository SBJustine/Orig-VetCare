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
                        <h6 class="mb-4">Registered Client</h6>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0" id="dtBasicExample">
                                <thead>
                                    <tr>
                                        <th scope="col" onclick="sortTable(0)">
                                            #
                                            <span class="arrow" data-column="0">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(1)">
                                            Fullname
                                            <span class="arrow" data-column="1">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(2)">
                                            Address
                                            <span class="arrow" data-column="2">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(3)">
                                            Phone Number
                                            <span class="arrow" data-column="3">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(4)">
                                            Sex
                                            <span class="arrow" data-column="4">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(5)">
                                            Email
                                            <span class="arrow" data-column="5">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(6)">
                                            Password
                                            <span class="arrow" data-column="6">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(7)">
                                            Status
                                            <span class="arrow" data-column="7">&#9650;</span>
                                        </th>
                                        <th scope="col" onclick="sortTable(8)">
                                            Date Added
                                            <span class="arrow" data-column="8">&#9650;</span>
                                        </th>
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
        function sortTable(columnIndex) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("dtBasicExample");
            switching = true;
            var sortOrder = table.rows[0].getElementsByTagName("th")[columnIndex].querySelector(".arrow").getAttribute("data-sort");
            
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("td")[columnIndex];
                    y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                    
                    if (columnIndex === 0) {
                        // For numeric sorting
                        if (sortOrder === "asc") {
                            if (parseInt(x.innerHTML) > parseInt(y.innerHTML)) {
                                shouldSwitch = true;
                                break;
                            }
                        } else {
                            if (parseInt(x.innerHTML) < parseInt(y.innerHTML)) {
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
</main>
