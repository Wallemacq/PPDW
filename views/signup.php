<?php
ob_start()
?>
<form method="POST">
    <div class="form-group">
        <label for="idlogin">Login</label>
        <input type="text" class="form-control" id="idlogin" name="login" value="" required>
    </div>
    <div class="form-group">
        <label for="idpassword">Password</label>
        <input type="password" class="form-control" id="idpassword" name="password" required>
    </div>
    <div class="form-group">
        <label for="idconfirmpassword">Confirm password</label>
        <input type="password" class="form-control" id="idconfirmpassword" name="confirm_password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$title = "Créer un utilisateur";
$content = ob_get_clean();
include 'views\template\template.php';
?>