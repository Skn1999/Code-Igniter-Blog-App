<h2 class="mt-5"> <?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart("posts/create");  ?>
<div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" placeholder="Add title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea id="editor1" rows=10 class="form-control" name="body" placeholder="Add body..."></textarea>
    </div>
    <div class="form-group">
    <label for="category">Category</label>
        <select class="form-control" name="category">
            <?php foreach($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" name="userfile" size="20" >
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>