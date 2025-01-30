<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property int $id
 * @property string|null $state_name
 * @property string|null $status
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state_name'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 20],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_name' => 'State Name',
            'status'=>'status',
        ];
    }
}
