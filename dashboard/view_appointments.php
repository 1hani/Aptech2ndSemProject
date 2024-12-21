<?php
include '../connection\db_config.php'; // Include database connection

$query = $pdo->query("SELECT * FROM appointments");
$appointments = $query->fetchAll();

echo "<h1>All Appointments</h1>";
echo "<table border='1'>";
echo "<tr>
        <th>Appointment ID</th>
        <th>Client Name</th>
        <th>Contact</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
      </tr>";
foreach ($appointments as $appointment) {
    echo "<tr>
            <td>{$appointment['appointmentID']}</td>
            <td>{$appointment['clientName']}</td>
            <td>{$appointment['clientContact']}</td>
            <td>{$appointment['serviceRequested']}</td>
            <td>{$appointment['appointmentDate']}</td>
            <td>{$appointment['appointmentTime']}</td>
            <td>{$appointment['status']}</td>
          </tr>";
}
echo "</table>";
?>