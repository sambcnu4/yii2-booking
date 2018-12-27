<?php

namespace app\modules\contact\models;

use Yii;

/**
 * This is the model class for table "yellow_page".
 *
 * @property int $id
 * @property string $contact_name ชื่อ-สกุล ผู้ติดต่อ
 * @property int $departments_id ฝ่าย
 * @property string $position ตำแหน่ง
 * @property string $location สถานที่
 * @property string $email อีเมลล์
 * @property string $ip_phone เบอร์ภายใน
 * @property string $tel1 เบอร์มือถือ
 * @property string $tel2 เบอร์มือถือ
 * @property string $tel3 เบอร์มือถือ
 * @property string $mvpn เบอร์ MVPN
 * @property string $direct_line เบอร์สายตรง
 * @property string $fax เบอร์โทรสาร
 * @property int $status_id สถานะ
 *
 * @property Departments $departments
 * @property YellowPageStatus $status
 */
class YellowPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yellow_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departments_id', 'status_id'], 'required'],
            [['departments_id', 'status_id'], 'integer'],
            [['contact_name', 'position', 'email', 'ip_phone', 'tel1', 'tel2', 'tel3', 'mvpn', 'direct_line', 'fax'], 'string', 'max' => 45],
            [['location'], 'string', 'max' => 200],
            [['departments_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['departments_id' => 'departments_id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => YellowPageStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_name' => 'ชื่อ-สกุล ผู้ติดต่อ',
            'departments_id' => 'ฝ่าย',
            'position' => 'ตำแหน่ง',
            'location' => 'สถานที่',
            'email' => 'อีเมลล์',
            'ip_phone' => 'เบอร์ภายใน',
            'tel1' => 'เบอร์มือถือ',
            'tel2' => 'เบอร์มือถือ',
            'tel3' => 'เบอร์มือถือ',
            'mvpn' => 'เบอร์ MVPN',
            'direct_line' => 'เบอร์สายตรง',
            'fax' => 'เบอร์โทรสาร',
            'status_id' => 'สถานะ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasOne(Departments::className(), ['departments_id' => 'departments_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(YellowPageStatus::className(), ['id' => 'status_id']);
    }
}
