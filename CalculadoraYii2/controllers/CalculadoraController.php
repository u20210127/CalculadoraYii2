<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class CalculadoraController extends Controller
{
    public function actionIndex()
    {
        $model = new \app\models\CalculadoraForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Realizar la operación
            switch ($model->operation) {
                case 'sum':
                    $model->result = $model->num1 + $model->num2;
                    break;
                case 'subtract':
                    $model->result = $model->num1 - $model->num2;
                    break;
                case 'multiply':
                    $model->result = $model->num1 * $model->num2;
                    break;
                case 'divide':
                    if ($model->num2 != 0) {
                        $model->result = $model->num1 / $model->num2;
                    } else {
                        $model->result = 'Error: División por cero';
                    }
                    break;
                default:
                    $model->result = 'Operación no válida';
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}