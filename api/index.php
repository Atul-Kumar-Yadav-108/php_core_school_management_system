<?php
session_start();
define('IS_API', true);
header('Content-Type: application/json');

include('../helpers/helpers.php');
include('../config/database.php');

$action = $_POST['action'] ?? $_GET['action'] ?? '';

if ($action === 'add_class') {
    include('../controllers/MastersController.php');
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid action']);
}
