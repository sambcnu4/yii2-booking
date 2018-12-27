<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "breaks".
 *
 * @property int $breaks_id
 * @property string $breaks_name รูปแบบการจัดเบรค
 * @property int $breaks_budget ค่าใช้จ่าย
 *
 * @property Booking[] $bookings
 */
class Breaks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'breaks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['breaks_name'], 'required'],
            [['breaks_budget'], 'integer'],
            [['breaks_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'breaks_id' => 'Breaks ID',
            'breaks_name' => 'รูปแบบการจัดเบรค',
            'breaks_budget' => 'ค่าใช้จ่าย',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_breaks' => 'breaks_id']);
    }
}
