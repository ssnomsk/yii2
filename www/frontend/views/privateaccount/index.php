<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccountUser */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Private';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Personal account:</h1>

<div class="co-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(array('value' => $user['username'])) ?>

    <?= $form->field($model, 'email')->textInput(array('value' => $user['email'])) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Index' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>