<h2 class="mt-5"><?= $title; ?></h2>

<ul class="mt-3 list-group">
<?php foreach($categories as $category) : ?>
    <li class="list-group-item"><a href="<?php echo site_url("/categories/posts/".$category['id']); ?>"><?php echo $category['name']; ?></a></li>
<?php endforeach ?>
</ul>