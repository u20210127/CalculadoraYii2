<?php
namespace app\models;

use Yii;
use yii\base\Model;

class CalculadoraForm extends Model
{
    public $num1;
    public $num2;
    public $operation;
    public $result;

    public function rules()
    {
        return [
            [['num1', 'num2'], 'required'],
            [['num1', 'num2'], 'number'],
            [['operation'], 'string'],
        ];
    }
}