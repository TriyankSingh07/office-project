<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string|null $city_name
 * @property int|null $state_id
 * @property int|null $dist_id
 * @property string|null $status
 */
class city extends \yii\db\ActiveRecord
{
   
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            // [[ 'id'], 'integer'],
            // [['city_name'], 'string', 'max' => 20],
            // [['state_name'], 'string', 'max' => 20],
            // [['state_name'], 'string', 'max' => 20],
            // [['status'], 'string', 'max' => 5],

           
                [['id'], 'integer'],
                [['city_name'], 'string', 'max' => 20],
                [['state_id', 'dist_id'], 'integer'], // Fix: Combined rule for virtual attributes
                [['status'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'city_name' => 'City Name',
            'state_id' => 'State Name',
            'dist_id' => 'Dist Name',
            'status' => 'Status',
        ];
    }

    public function getState(){
        return $this->hasOne(State::class,['id'=>'state_id']);
    }

    public function getDist(){
        return $this->hasOne(Dist::class,['id'=>'dist_id']);
    }


    
}
