<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Teacher".
 *
 * @property integer $id_Teacher
 * @property string $name
 * @property string $telefone
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'telefone'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Teacher' => 'Id  Teacher',
            'name' => 'Name',
            'telefone' => 'Telefone',
        ];
    }
}
