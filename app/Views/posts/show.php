<div class="posts">

    <div class="post">
        <h3><?php echo esc($post->title); ?></h3>
        <p><?php echo esc($post->content); ?></p>
    </div>

    <a href="/posts/<?php echo $post->id ?>/edit">edit post</a>


</div>

