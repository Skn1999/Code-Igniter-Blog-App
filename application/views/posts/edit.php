<h2 class="mt-5"> <?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open("posts/update");  ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
<div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" placeholder="Add title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea id="editor1" class="form-control" rows="6" name="body" placeholder="Add body..."><?php echo $post['body']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category">
            <?php foreach($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Edit Post</button>
</form>