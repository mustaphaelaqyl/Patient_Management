<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
require __DIR__ . '/encrypt.php';
use Smarty\Smarty;

// Create an instance of Smarty
$smarty = new Smarty();

$smarty->registerPlugin("modifier", "encryptId", "encryptId");

// Set the directories
$smarty->setTemplateDir([
    __DIR__ . '/../templates/views', // Directory for page templates
    __DIR__ . '/../templates', // Directory for layout templates
]);
$smarty->setCompileDir(__DIR__ . '/../templates_c');
$smarty->setCacheDir(__DIR__ . '/../cache');
$smarty->setConfigDir(__DIR__ . '/../configs');

$smarty->assign('name', 'Healthcare Management System');
// Enable HTML escaping
$smarty->setEscapeHtml(true);

// Define navigation items
$navigationItems = [
    'dashboard' => ['label' => 'Dashboard', 'icon' => 'fas fa-tachometer-alt', 'page' => 'dashboard'],
    'patients' => ['label' => 'Patient Details', 'icon' => 'fas fa-user', 'page' => 'patients'],
    // Add other items here
];

// Assign navigation items to Smarty
$smarty->assign('navigationItems', $navigationItems);

// Determine the content template based on the query parameter
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Define valid pages
$validPages = array_merge(array_keys($navigationItems), ['ajouter_patients', 'edit_patients']);

// Validate the page
if (!in_array($page, $validPages)) {
    $contentTemplate = 'views/errors/index.tpl';
} else {
    $contentTemplate = handlePage($page, $pdo, $smarty);
}

// Assign the content template to the layout
$smarty->assign('dashboard', $contentTemplate);
$smarty->assign('includeScripts', $page === 'patients');
$smarty->assign('includeScriptsDate', in_array($page, ['ajouter_patients', 'patients','edit_patients']));

// Display the main layout
$smarty->display('layouts/main.tpl');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to handle page routing and data assignment
function handlePage($page, $pdo, $smarty) {
    switch ($page) {
        case 'patients':
            require __DIR__ . '/doctors.php';
            $doctors = fetchDoctor($pdo);
            $smarty->assign('doctors', $doctors);

            require __DIR__ . '/patients.php';
            $patients = fetchAll($pdo);
            $smarty->assign('patients', $patients);

            return "views/{$page}/index.tpl";

        case 'ajouter_patients':
            require __DIR__ . '/doctors.php';
            $doctors = fetchDoctor($pdo);
            $smarty->assign('doctors', $doctors);

            return 'views/patients/ajouter.tpl';

        case 'edit_patients':
           // Decode the base64 encoded ID
            $encodedId = isset($_GET['id']) ? $_GET['id'] : '';
            $patientId = base64_decode($encodedId);

            if ($patientId > 0) {
                require __DIR__ . '/patients.php';
                $patient = fetchById($pdo, $patientId);
                if ($patient) {
                    require __DIR__ . '/doctors.php';
                    $doctors = fetchDoctor($pdo);
                    $smarty->assign('doctors', $doctors);
                    // var_dump($patient);
                    $smarty->assign('patient', $patient);
                    return 'views/patients/edit.tpl';
                } else {
                   return 'views/errors/index.tpl';
                }
            } else {
                return  'views/errors/index.tpl';
            }


        default:
            return "views/{$page}/index.tpl";
    }
}
// 
