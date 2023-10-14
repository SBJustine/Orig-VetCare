<?php
$host = "your_db_host";
$username = "your_db_username";
$password = "your_db_password";
$database = "your_db_name";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vaccination_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Vaccination Records</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Dog Name</th><th>Vaccination Name</th><th>Vaccination Date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["dog_name"] . "</td>";
        echo "<td>" . $row["vaccination_name"] . "</td>";
        echo "<td>" . $row["vaccination_date"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No vaccination records found.";
}

$conn->close();
?>
