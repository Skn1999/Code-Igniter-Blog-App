<h2 class="mt-5"><?= $title ?></h2>

<div class="container mt-3">
<div class="row justify-center">
<?php foreach($posts as $post) : ?>
    <div class="px-5 py-3 mx-2 posts col">
        <h3><?php echo $post['title']; ?></h3>
        <small class="post-date"><?php echo $post["created_at"]; ?></small><br>
        <p><?php echo $post['body']; ?></p>
        <p><a class="btn btn-link" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
    </div>
<?php endforeach; ?>
</div>
</div>