<?php
// Fetch all Data of Patients
function fetchDoctor($pdo) {
    $stmt = $pdo->query('
        SELECT  *
        FROM doctors
    ');
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Return data without directly interacting with Smarty
}
?>