<?php echo\Config\Services::validation()->listErrors(); ?>

<form action="/posts/update/<?php echo $post->id; ?>" method="put">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo $post->title; ?>"/><br />

    <label for="body">Text</label>
    <textarea name="content"><?php echo $post->content; ?></textarea><br />

    <input type="submit" name="submit" value="Edit post" />

</form>
