<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dist".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $state_id
 * @property string|null $status
 */
class Dist extends \yii\db\ActiveRecord
{
    // public $name;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dist';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['state_id'], 'integer'],
            [['dist_name'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dist_name' => 'Name',
            'state_id' => 'State ID',
            'status' => 'Status',
        ];
    }
}
