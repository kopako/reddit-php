<h2>Edit your post</h2>

<?= $this->render('_postForm', [
    'postForm' => $postForm,
    'buttonText' => 'Edit',
    'action' => ['post/update', 'id' => $id]
]) ?>
