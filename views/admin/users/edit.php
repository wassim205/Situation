<?php include __DIR__.'/../../layouts/header.php'; 
require_once '../../../database/connection.php';


?>

<h2>Edit User</h2>

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
       </select>
    </div>

    <!-- TODO: Add submit button -->
    <button type="submit" class="btn btn-primary">Add Employee</button>
</form>

<?php include __DIR__.'/../../layouts/footer.php'; ?>
