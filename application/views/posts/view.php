<div class="mt-5">
<h3><?php echo $post['title']; ?></h3>
<small class="post-date"><?php echo $post["created_at"]; ?></small><br>
<img class="img-fluid" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['poster_image']; ?> " alt="Post Image">   

<div class="post-body">
<p><?php echo $post['body']; ?></p>
</div>
</div>
<hr>
<div class="row">
    <a href="<?php echo base_url()."posts/edit/".$post['slug']; ?>"  class="btn btn-secondary mr-3">Edit</a>
    <?php echo form_open("posts/delete/".$post['id']) ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>