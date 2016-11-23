<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id_Student
 * @property integer $id_Teacher
 * @property string $name
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Teacher', 'name'], 'required'],
            [['id_Teacher'], 'integer'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Student' => 'Id  Student',
            'id_Teacher' => 'Id  Teacher',
            'name' => 'Name',
        ];
    }
}
