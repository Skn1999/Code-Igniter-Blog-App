<div class="mt-5">
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date"><?php echo $post["created_at"]; ?></small><br>

    <div class="row">
        <div class="col-md-4">
            <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['poster_image']; ?> " alt="Post Image">   

        </div>
        <div class="col-md-8">
            <div class="post-body">
                <p><?php echo $post['body']; ?></p>
            </div>
            
            <div class="d-flex">
                <a href="<?php echo base_url()."posts/edit/".$post['slug']; ?>"  class="btn btn-secondary mr-3">Edit</a>
                <?php echo form_open("posts/delete/".$post['id']) ?>
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>


</div>
<hr>
