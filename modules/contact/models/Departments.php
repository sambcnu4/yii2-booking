<?php

namespace app\modules\contact\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $departments_id
 * @property string $department_name หน่วยงาน
 * @property string $color สี
 *
 * @property Booking[] $bookings
 * @property YellowPage[] $yellowPages
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_name'], 'required'],
            [['department_name', 'color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'departments_id' => 'Departments ID',
            'department_name' => 'หน่วยงาน',
            'color' => 'สี',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['departments_id' => 'departments_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYellowPages()
    {
        return $this->hasMany(YellowPage::className(), ['departments_id' => 'departments_id']);
    }
}
