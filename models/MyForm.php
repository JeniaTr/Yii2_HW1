<?php
/**
 * Created by PhpStorm.
 * User: jeniatr
 * Date: 22.11.16
 * Time: 23:18
 */

namespace app\models;

use yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message'=>'Не заполнено'],
            ['email', 'email', 'message'=>'Не коректный имейл адрес']
        ];
    }
}

?>