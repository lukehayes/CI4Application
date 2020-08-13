<h2><?= esc($title); ?></h2>

<?php echo\Config\Services::validation()->listErrors(); ?>

<form action="/posts/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="Create a new post" />

</form>
