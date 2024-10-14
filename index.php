<?php
include 'config.php';

$stmt = $pdo->query("SELECT * FROM Employees");
$employees = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Employee List</h2>
        <a href="create.php" class="btn btn-primary mb-3">Add Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= htmlspecialchars($employee['id']) ?></td>
                    <td><?= htmlspecialchars($employee['Name']) ?></td>
                    <td><?= htmlspecialchars($employee['Address']) ?></td>
                    <td><?= htmlspecialchars($employee['Salary']) ?></td>
                    <td><?= htmlspecialchars($employee['Image']) ?></td>
                    <td>
                        <a href="read.php?id=<?= $employee['id'] ?>" class="btn btn-info btn-sm">View</a>
                        <a href="update.php?id=<?= $employee['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $employee['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
