<?php
require 'db.php'; // Adjust the path if necessary
require __DIR__ . '/encrypt.php';
// Fetch all Data of Patients
function fetchAll($pdo) {
    $stmt = $pdo->query('
        SELECT patients.*, doctors.name AS doctor_name 
        FROM patients 
        INNER JOIN doctors ON patients.doctor_id = doctors.id
    ');
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Return data without directly interacting with Smarty
}

function storeData($pdo, $name, $date, $phone, $doctorId) {
    try {
        // Log the date format for debugging
        error_log('Received date format: ' . $date);
        
        // Check if the date format is valid
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        if (!$datetime) {
            throw new Exception('Invalid date format');
        }

        $stmt = $pdo->prepare("
            INSERT INTO patients (name, date, phone, doctor_id, created_at)
            VALUES (:name, :date, :phone, :doctor_id, NOW())
        ");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':date', $date); // Use the date as-is
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':doctor_id', $doctorId);

        $stmt->execute();

        return ['status' => 'success', 'message' => 'Patient added successfully'];
    } catch (Exception $e) {
        return ['status' => 'error', 'message' => 'Failed to add patient: ' . $e->getMessage()];
    }
}

function fetchById($pdo, $id) {
    $stmt = $pdo->prepare('
        SELECT patients.*, doctors.name AS doctor_name 
        FROM patients 
        INNER JOIN doctors ON patients.doctor_id = doctors.id 
        WHERE patients.id = :id
    ');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updatePatient($pdo, $id, $name, $date, $phone, $doctorId) {
    try {
        // Log the date format for debugging
        error_log('Received date format: ' . $date);
        
        // Check if the date format is valid
        $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        if (!$datetime) {
            throw new Exception('Invalid date format');
        }

        $stmt = $pdo->prepare("
            UPDATE patients 
            SET name = :name, date = :date, phone = :phone, doctor_id = :doctor_id 
            WHERE id = :id
        ");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':date', $date); // Use the date as-is
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':doctor_id', $doctorId);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return ['status' => 'success', 'message' => 'Patient updated successfully'];
    } catch (Exception $e) {
        return ['status' => 'error', 'message' => 'Failed to update patient: ' . $e->getMessage()];
    }
}

// Check if the form was submitted via POST
// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if _method field is present and set to PUT
    $method = $_POST['_method'] ?? 'POST'; // Default to POST if _method is not set

    $name = $_POST['name'] ?? '';
    $date = $_POST['date'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $doctorId = $_POST['doctor'] ?? '';

    if($method ==='PUT'){
        $encryptedId = $_POST['id'] ?? '';

        // Log the encrypted ID for debugging
        error_log('Encrypted ID received: ' . $encryptedId);
    
        // Decrypt the ID
        $id = decryptId($encryptedId);
    
        // Ensure the decrypted ID is numeric
        if (!is_numeric($id)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid ID']);
            exit;
        }
    
    }else {
        $id = null; // No ID for POST requests
    }
    
    // Ensure all required fields are filled
    if ($name && $date && $phone && $doctorId) {
        // Decide which function to call based on _method or ID
        if ($method === 'PUT' && $id > 0) {
            // Handle update operation
            $result = updatePatient($pdo, $id, $name, $date, $phone, $doctorId);
        } else {
            // Handle create operation
            $result = storeData($pdo, $name, $date, $phone, $doctorId);
        }
        echo json_encode($result);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all fields']);
    }
}



// Fetch specific patient data for editing
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $encryptedId = $_GET['id'];
    $id = decryptId($encryptedId);

    if ($id) {
        $patient = fetchById($pdo, $id);
        if ($patient) {
            return json_encode(['status' => 'success', 'data' => $patient]);
        } else {
            return json_encode(['status' => 'error', 'message' => 'Patient not found']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid ID']);
    }
    exit;
}
?>
