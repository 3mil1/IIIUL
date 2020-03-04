<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



$mysqli = new mysqli("localhost", "at102020iktkhk", "TRX6v~liZzIe", "at102020_III-moodul");
if($mysqli->connect_error) {
  exit('Could not connect');
}

// $sql = "SELECT ID, NAME, AGE, ADDRESS, SALARY
// FROM KASUTAJA WHERE NAME = ?";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['q']);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($id, $name, $age, $adr, $sal);
// $stmt->fetch();
// $stmt->close();

// echo "<table>";
// echo "<tr>";
// echo "<th>ID</th>";
// echo "<td>" . $id . "</td>";
// echo "<th>Name</th>";
// echo "<td>" . $name . "</td>";
// echo "<th>AGE</th>";
// echo "<td>" . $age . "</td>";
// echo "<th>ADDRESS</th>";
// echo "<td>" . $adr . "</td>";
// echo "<th>SALARY</th>";
// echo "<td>" . $sal . "</td>";
// echo "</tr>";
// echo "</table>";

// ?>