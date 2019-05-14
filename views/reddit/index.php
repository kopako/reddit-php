<a href="/reddit/add" class="btn btn-primary">Submit new post</a>

<h1>Trending new posts</h1>
<table class="table">
    <tr>
        <th>Rating</th>
        <th>+</th>
        <th>-</th>
        <th>Title</th>
    </tr>
    <?php use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->like ?></td>
            <td>
                <?php ActiveForm::begin([
                    'action' => ['/reddit/like', 'id' => $post->id]
                ]) ?>
                <button type="submit" class="btn-default">Like</button>
                <?php ActiveForm::end() ?>
            </td>
            <td>
                <?php ActiveForm::begin([
                    'action' => ['/reddit/dislike', 'id' => $post->id]
                ]) ?>
                <button type="submit" class="btn">Dislike</button>
                <?php ActiveForm::end() ?>
            </td>
            <td><?= Html::encode($post->title) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
