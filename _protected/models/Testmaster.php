<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_master".
 *
 * @property int $id
 * @property string $name
 * @property int $salary
 */
class Testmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'salary'], 'required'],
            [['salary'], 'integer'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'salary' => 'Salary',
        ];
    }
}
