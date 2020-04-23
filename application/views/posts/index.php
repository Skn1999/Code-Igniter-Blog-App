<h2 class="mt-5"><?= $title ?></h2>

<div class="container mt-3">
<div class="row justify-center">
<?php foreach($posts as $post) : ?>
    <div class="px-5 py-5 mx-2 my-3 posts w-100">
        <h4><?php echo $post['title']; ?></h4>
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['poster_image']; ?> " alt="Post Image">   
            </div>
            <div class="col-md-9">
                    <small class="post-date">Posted on: <?php echo $post["created_at"]; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
                <p class="text-black-50"><?php echo word_limiter($post['body'], 50); ?></p>
                <p><a class="btn btn-secondary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>    
            </div>
        </div>
        
    </div>
<?php endforeach; ?>
</div>
</div>