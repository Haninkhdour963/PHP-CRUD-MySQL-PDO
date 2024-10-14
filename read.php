<?php
include 'config.php';

$id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT * FROM Employees WHERE id = ?");
$stmt->execute([$id]);
$employee = $stmt->fetch();

if (!$employee) {
    die("Employee not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Employee Details</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($employee['Name']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($employee['Address']) ?></p>
        <p><strong>Salary:</strong> <?= htmlspecialchars($employee['Salary']) ?></p>
        <p><strong>Image:</strong> <?= htmlspecialchars($employee['Image']) ?></p>
        <a href="index.php" class="btn btn-primary">Back to List</a>
    </div>
</body>
</html>
