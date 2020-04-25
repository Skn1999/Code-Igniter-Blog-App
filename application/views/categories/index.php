<h2 class="mt-5"><?= $title; ?></h2>

<ul class="mt-3 list-group">
<?php foreach($categories as $category) : ?>
    <li class="list-group-item"><a href="<?php echo site_url("/categories/posts/".$category['id']); ?>"><?php echo $category['name']; ?></a>
    <?php if($this->session->userdata("user_id") == $category['user_id']): ?>
        <form class="d-inline" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
            <input type="submit" class="btn btn-secondary bg-danger text-white float-right" value="X">
        </form>
    <?php endif; ?>
    </li>

<?php endforeach ?>
</ul>