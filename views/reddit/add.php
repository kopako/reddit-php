<h2>Submit your post here</h2>

<?= $this->render('_postForm', [
    'postForm' => $postForm,
    'buttonText' => 'Submit',
    'action' => ['reddit/save']
]) ?>