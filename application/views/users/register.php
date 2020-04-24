<h2 class="mt-5"><?= $title; ?></h2>

<?php if(validation_errors()): ?>
<div class="alert alert-danger">
    <?php echo validation_errors(); ?>
</div>
<?php endif; ?>

<?php echo form_open("users/register"); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="zipcode">Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div><div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm your password">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>

</form>