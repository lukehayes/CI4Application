<h3>All Posts</h3>

<div class="posts">

    <?php foreach ($posts as $post): ?>

        <div class="post">
            <h3><?php echo esc($post->title); ?></h3>
            <p><?php echo esc($post->content); ?></p>
        </div>
    <?php endforeach; ?>
        
</div>

