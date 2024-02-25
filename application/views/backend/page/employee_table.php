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
                        <h6 class="mb-4">Registered Employee</h6>
                        <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0" id="employeeTable">
                                <thead>
                                    <tr>
                                        <th scope="col" onclick="sortTableEmployee(0)">
                                        <div class="d-flex justify-content-between align-items-center">
                                                #<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(1)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Fullname<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(2)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Position<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(3)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Address<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(4)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Age<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(5)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Sex<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(6)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Phone Number<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(7)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Status<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col" onclick="sortTableEmployee(8)">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Date Added<span class="arrow">&#9650;</span>
                                            </div>
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($employeeUsers as $key => $user): ?>
                                        <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                                            <td><?php echo $user->employeeID; ?></td>
                                            <td><?php echo $user->employeeName; ?></td>
                                            <td><?php echo $user->employeePosition; ?></td>
                                            <td><?php echo $user->employeeAddress; ?></td>
                                            <td><?php echo $user->employeeAge; ?></td>
                                            <td><?php echo $user->employeeSex; ?></td>
                                            <td><?php echo $user->employeePhoneNum; ?></td>
                                            <td><?php echo $user->employeeStatus; ?></td>
                                            <td><?php echo $user->employeeAdded; ?></td>
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


<script>
    function sortTableEmployee(columnIndex) {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("employeeTable");
        switching = true;
        var sortOrder = table.rows[0].getElementsByTagName("th")[columnIndex].querySelector(".arrow").getAttribute("data-sort");
        
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("td")[columnIndex];
                y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                
                if (columnIndex === 0) { // For the "#" column
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
                } else { // For other columns
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
            arrow.innerHTML = "&#9650;"; // Up arrow
        } else {
            arrow.innerHTML = "&#9660;"; // Down arrow
        }
    }
</script>
