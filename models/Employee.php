<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $emp_address
 * @property int|null $dept_id
 * @property string|null $gender
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['emp_address'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 30],
            [['state_name', 'city_name','dist_name'], 'string', 'max' => 20],
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
            'emp_address' => 'Emp Address',
            'dept_id' => 'Dept ID',
            'gender' => 'Gender',
            'state_name' => 'State',
            'city_name '=>'city',
            'dist_name' => 'Dist',
        ];
    }
}
