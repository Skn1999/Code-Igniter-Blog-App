<div class="mt-5">
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date"><?php echo $post["created_at"]; ?></small><br>

    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid w-100" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['poster_image']; ?> " alt="Post Image">   

        </div>
        <div class="col-md-12">
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

<div class="row">
    <div class="col-md-6">
        <h4>Add Comment</h4>
        <?php echo validation_errors();
            echo form_open("comments/create/".$post['id']); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Comment</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>

            <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>"">

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
    <div class="col-md-6">
        <h4>Add Comment</h4>
        <?php if($comments): ?>
            <?php foreach($comments as $comment): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="card-title"><?php echo $comment['comment']; ?></p> 
                        <em class="card-body text-muted">by <?php echo $comment['name']; ?></em>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-muted mt-5">No Comments</p>
        <?php endif; ?>
    </div>
</div>