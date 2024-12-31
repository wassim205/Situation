<?php
include __DIR__ . '/../layouts/header.php';
include __DIR__ . '/../../database/connection.php';

$stmt = $conn->prepare("SELECT user.id, user.username, user.fullname, role.name AS role_name FROM user JOIN role ON user.role_id = role.id");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);





?>

<h2>Admin Dashboard</h2>


<!-- Add User Button -->
<a href="./users/add.php" class="btn btn-primary mb-3">Add User</a>


<!-- TODO: Display a table of users with options to edit or delete -->
<!-- Use Bootstrap table classes -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['fullname'] ?></td>
                <td> <?= $user['role_name'] ?></td>

                <?php // TODO: Add edit and delete links with appropriate href values
                ?>
                <td> <a href='../admin/users/edit.php?id=<?= $user['id'] ?>' class='btn btn-warning'>Edit</a>
                 | 
                 <a href='../admin/users/add.php' class='btn btn-danger'>Delete</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php include __DIR__ . '/../layouts/footer.php'; ?>