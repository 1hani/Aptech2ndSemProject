<?php
include '../connection/db_config.php';
include("components/header.php");

                    
 // Adjust path to db_config.php if needed

// Fetch appointments from the database
$query = $pdo->query("SELECT * FROM appointments");
$appointments = $query->fetchAll();
?>

<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Hoverable Table</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($appointments)): ?>
                    <?php foreach ($appointments as $appointment): ?>
                        <tr>
                            <th scope="row"><?= htmlspecialchars($appointment['appointmentID']) ?></th>
                            <td><?= htmlspecialchars($appointment['clientName']) ?></td>
                            <td><?= htmlspecialchars($appointment['clientContact']) ?></td>
                            <td><?= htmlspecialchars($appointment['serviceRequested']) ?></td>
                            <td><?= htmlspecialchars($appointment['appointmentDate']) ?></td>
                            <td><?= htmlspecialchars($appointment['appointmentTime']) ?></td>
                            <td><?= htmlspecialchars($appointment['status']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No appointments found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include("components/footer.php")
?>