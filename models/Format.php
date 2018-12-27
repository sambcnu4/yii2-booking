<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "format".
 *
 * @property int $format_id
 * @property string $format_name รูปแบบการจัด
 *
 * @property Booking[] $bookings
 */
class Format extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'format';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['format_name'], 'required'],
            [['format_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'format_id' => 'Format ID',
            'format_name' => 'รูปแบบการจัด',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_format' => 'format_id']);
    }
}
