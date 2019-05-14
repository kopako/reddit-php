<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'action' => $action,
])?>

<?=$form->field($postForm, 'title')?>
<?=$form->field($postForm, 'body')?>

    <button type="submit">
        <?=$buttonText?>
    </button>

<?php ActiveForm::end()?>