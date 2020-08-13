<h3>All Posts</h3>

<div class="posts">

    <?php foreach ($posts as $post): ?>

        <div class="post">
            <h3><a href="/posts/show/<?php echo $post->id ?>"><?php echo esc($post->title); ?></a></h3>
            <p><?php echo esc($post->content); ?></p>
        </div>
    <?php endforeach; ?>
        
</div>

