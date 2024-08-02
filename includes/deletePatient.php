<?php
require 'db.php'; // Adjust the path if necessary
require __DIR__ . '/encrypt.php';


// Function to delete patient by ID
function deletePatient($pdo, $id) {
    try {
        $stmt = $pdo->prepare("DELETE FROM patients WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return ['status' => 'success', 'message' => 'Patient deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Patient not found'];
        }
    } catch (Exception $e) {
        return ['status' => 'error', 'message' => 'Failed to delete patient: ' . $e->getMessage()];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $method = $_POST['_method'] ?? 'POST';
    $encryptedId = $_POST['item_id'] ?? '';

    // Log the encrypted ID for debugging
    error_log('Encrypted ID received: ' . $encryptedId);

    // Decrypt the ID
    $id = decryptId($encryptedId);

    // Ensure the decrypted ID is numeric
    if (!is_numeric($id)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid ID']);
        exit;
    }

    if ($method === "DELETE" && $id > 0) {
        // Handle delete operation
        $result = deletePatient($pdo, $id);
        echo json_encode($result);
    }
}