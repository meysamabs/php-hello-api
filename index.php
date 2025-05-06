<?php
header('Content-Type: application/json; charset=utf-8');

$name = $_GET['name'] ?? $_POST['name'] ?? 'مهمان';
echo json_encode(["message" => "سلام، $name!"]);
?>
