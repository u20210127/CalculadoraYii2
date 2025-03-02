<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="calculadora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num1')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'num2')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'operation')->dropDownList([
        'sum' => 'Sumar',
        'subtract' => 'Restar',
        'multiply' => 'Multiplicar',
        'divide' => 'Dividir',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php if ($model->result !== null): ?>
        <div class="result">
            <h3>Resultado: <?= Html::encode($model->result) ?></h3>
        </div>
    <?php endif; ?>

    <?php ActiveForm::end(); ?>

</div>