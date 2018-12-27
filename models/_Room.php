<?php

namespace app\models;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $room_id
 * @property string $room_name ชื่อห้อง
 * @property string $room_size ขนาดห้อง
 * @property string $room_seate จำนวนที่นั่ง
 * @property string $room_description รายละเอียดห้อง
 * @property string $room_img รูปห้อง
 *
 * @property Booking[] $bookings
 */
class Room extends \yii\db\ActiveRecord
{
    
    public $upload_foler = 'uploads/room/img';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_name'], 'required'],
            [['room_description'], 'string'],
            [['room_name'], 'string', 'max' => 255],
            [['room_size', 'room_seate'], 'string', 'max' => 20],
            [['room_img'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'Room ID',
            'room_name' => 'ชื่อห้อง',
            'room_size' => 'ขนาดห้อง',
            'room_seate' => 'จำนวนที่นั่ง',
            'room_description' => 'รายละเอียดห้อง',
            'room_img' => 'รูปห้อง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['booking_room' => 'room_id']);
    }
    
    //
    
     public function upload($model, $attribute) {
        $photo = UploadedFile::getInstance($model, $attribute);
        $path = $this->getUploadPath();
        if ($this->validate() && $photo !== null) {

            $fileName = md5($photo->baseName . time()) . '.' . $photo->extension;
            if ($photo->saveAs($path . $fileName)) {
                return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadPath() {
        return Yii::getAlias('@webroot') . '/' . $this->upload_foler . '/';
    }

    public function getUploadUrl() {
        return Yii::getAlias('@web') . '/' . $this->upload_foler . '/';
    }

    public function getPhotoViewer() {
        return empty($this->room_img) ? Yii::getAlias('@web') . '/uploads/img/nopicture.jpg' : $this->getUploadUrl() . $this->room_img;
    }
}
