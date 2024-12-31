<?php
include __DIR__.'/../../layouts/header.php'; 
require_once '../../../database/connection.php';



if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $role = $_POST['role'];
    if ($role == "Admin") {
        $role_id = 1;
    }
    else {
        $role_id = 2;
    }


    $query = "INSERT INTO User (username, fullname, password, role_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$username, $fullname, $password, $role_id]);
    header('Location: ../dashboard.php');
}

?>




<h2>Add User</h2>

<form method="post" action="">
    <!-- TODO: Add input fields for name and email -->
    <div class="form-group">
        <label for="fullname">fullname:</label>
        <input type="text" class="form-control" name="fullname" id="fullname" required>
    </div>
    <div class="form-group">
        <label for="username">username:</label>
        <input type="username" class="form-control" name="username" id="username" required>
    </div>

    <div class="form-group">
       <select name="role" id="role">
        <option default>select role</option>
        <option value="User">User</option>
        <option value="Admin">Admin</option>
       </select>
    </div>

    <!-- TODO: Add submit button -->
    <button type="submit" class="btn btn-primary" name="add">Add Employee</button>
</form>

<?php include __DIR__.'/../../layouts/footer.php'; ?>
