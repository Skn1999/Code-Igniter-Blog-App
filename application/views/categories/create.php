<h2 class="mt-5"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create') ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" placeholder="Enter category name" name="name">
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>