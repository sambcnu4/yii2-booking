<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usefor".
 *
 * @property int $usefor_id
 * @property string $usefor_name ลักษณะการใช้งาน
 *
 * @property Booking[] $bookings
 */
class Usefor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usefor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usefor_name'], 'required'],
            [['usefor_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usefor_id' => 'Usefor ID',
            'usefor_name' => 'ลักษณะการใช้งาน',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_usefor' => 'usefor_id']);
    }
}
