<?php echo form_open("users/login"); ?>
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-center"><?php echo $title; ?></h1>
            <div class="form-group my-4">
                <input type="text" name="username" class="form-control" placeholder="Enter username" required autofocus>
            </div>
            <div class="form-group my-4">
                <input type="password" name="password" class="form-control" placeholder="Enter password" required >
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>
</form>