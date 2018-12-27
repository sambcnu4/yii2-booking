<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_status".
 *
 * @property int $booking_status_id
 * @property string $booking_status_name สถานะการจอง
 * @property string $booking_statust_color สี
 *
 * @property Booking[] $bookings
 */
class BookingStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_status_name'], 'required'],
            [['booking_status_name'], 'string', 'max' => 150],
            [['booking_statust_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_status_id' => 'Booking Status ID',
            'booking_status_name' => 'สถานะการจอง',
            'booking_statust_color' => 'สี',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_status' => 'booking_status_id']);
    }
}
