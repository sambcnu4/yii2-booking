<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $booking_id
 * @property string $booking_no เลขที่การจอง
 * @property int $booking_room ห้อง
 * @property string $booking_start
 * @property string $booking_end
 * @property int $booking_usefor ลักษณะการใช้งาน
 * @property int $departments_id หน่วยงานที่ขอ
 * @property string $booking_user ชื่อผู้จอง
 * @property string $booking_tel เบอร์ติดต่อ
 * @property string $booking_title หัวข้อ
 * @property string $booking_description รายละเอียด
 * @property int $booking_seate จำนวนผู้เข้าร่วม
 * @property int $booking_breaks รูปแบบการจัดเบรค
 * @property int $booking_format รูปแบบการจัดห้อง
 * @property int $booking_budget ประเภทงบประมาณ
 * @property string $booking_cur_date วันที่บันทึก
 * @property string $eqipment_notebook คอมพิวเตอร์ Notebook
 * @property string $eqipment_visualizer เครื่องฉาย Visualizer
 * @property string $eqipment_projector เครื่องฉาย Projecter
 * @property string $eqipment_tv โทรทัศน์สี TV
 * @property string $eqipment_mic1 ไมโครโฟนแบบตั้งโต๊ะ
 * @property string $eqipment_mic2 ไมโครโฟนแบบไร้สาย
 * @property string $eqipment_sound_record เครื่องบันทึกเสียง
 * @property string $eqipment_vdo_record กล้องบันทึกวีดีโอ
 * @property string $eqipment_photo_record กล้องถ่ายภาพ
 * @property string $file ไฟล์เอกสารการจอง
 * @property int $booking_status สถานะการจอง
 *
 * @property BookingStatus $bookingStatus
 * @property Breaks $bookingBreaks
 * @property Budget $bookingBudget
 * @property Departments $departments
 * @property Format $bookingFormat
 * @property Room $bookingRoom
 * @property Usefor $bookingUsefor
 */
class Booking extends \yii\db\ActiveRecord {

    public $upload_foler_file = 'uploads/booking/pdf';

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['booking_room', 'booking_usefor', 'departments_id', 'booking_user', 'booking_title', 'booking_breaks', 'booking_format', 'booking_budget', 'booking_cur_date', 'booking_status'], 'required'],
            [['booking_room', 'booking_usefor', 'departments_id', 'booking_seate', 'booking_breaks', 'booking_format', 'booking_budget', 'booking_status'], 'integer'],
            [['booking_description'], 'string'],
            [['booking_no', 'booking_start', 'booking_end', 'booking_tel', 'booking_cur_date'], 'string', 'max' => 45],
            [['booking_user', 'file'], 'string', 'max' => 150],
            [['booking_title'], 'string', 'max' => 255],
            [['eqipment_notebook', 'eqipment_visualizer', 'eqipment_projector', 'eqipment_tv', 'eqipment_mic1', 'eqipment_mic2', 'eqipment_sound_record', 'eqipment_vdo_record', 'eqipment_photo_record'], 'string', 'max' => 1],
            [['booking_status'], 'exist', 'skipOnError' => true, 'targetClass' => BookingStatus::className(), 'targetAttribute' => ['booking_status' => 'booking_status_id']],
            [['booking_breaks'], 'exist', 'skipOnError' => true, 'targetClass' => Breaks::className(), 'targetAttribute' => ['booking_breaks' => 'breaks_id']],
            [['booking_budget'], 'exist', 'skipOnError' => true, 'targetClass' => Budget::className(), 'targetAttribute' => ['booking_budget' => 'budget_id']],
            [['departments_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['departments_id' => 'departments_id']],
            [['booking_format'], 'exist', 'skipOnError' => true, 'targetClass' => Format::className(), 'targetAttribute' => ['booking_format' => 'format_id']],
            [['booking_room'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['booking_room' => 'room_id']],
            [['booking_usefor'], 'exist', 'skipOnError' => true, 'targetClass' => Usefor::className(), 'targetAttribute' => ['booking_usefor' => 'usefor_id']],
            [['file'], 'file',
                'skipOnEmpty' => true,
                'extensions' => 'pdf'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'booking_id' => 'Booking ID',
            'booking_no' => 'เลขที่การจอง',
            'booking_room' => 'ห้อง',
            'booking_start' => 'Booking Start',
            'booking_end' => 'Booking End',
            'booking_usefor' => 'ลักษณะการใช้งาน',
            'departments_id' => 'หน่วยงานที่ขอ',
            'booking_user' => 'ชื่อผู้จอง',
            'booking_tel' => 'เบอร์ติดต่อ',
            'booking_title' => 'หัวข้อ',
            'booking_description' => 'รายละเอียด',
            'booking_seate' => 'จำนวนผู้เข้าร่วม',
            'booking_breaks' => 'รูปแบบการจัดเบรค',
            'booking_format' => 'รูปแบบการจัดห้อง',
            'booking_budget' => 'ประเภทงบประมาณ',
            'booking_cur_date' => 'วันที่บันทึก',
            'eqipment_notebook' => 'คอมพิวเตอร์ Notebook',
            'eqipment_visualizer' => 'เครื่องฉาย Visualizer',
            'eqipment_projector' => 'เครื่องฉาย Projecter',
            'eqipment_tv' => 'โทรทัศน์สี TV',
            'eqipment_mic1' => 'ไมโครโฟนแบบตั้งโต๊ะ',
            'eqipment_mic2' => 'ไมโครโฟนแบบไร้สาย',
            'eqipment_sound_record' => 'เครื่องบันทึกเสียง',
            'eqipment_vdo_record' => 'กล้องบันทึกวีดีโอ',
            'eqipment_photo_record' => 'กล้องถ่ายภาพ',
            'file' => 'ไฟล์เอกสารการจอง',
            'booking_status' => 'สถานะการจอง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus() {
        return $this->hasOne(BookingStatus::className(), ['booking_status_id' => 'booking_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingBreaks() {
        return $this->hasOne(Breaks::className(), ['breaks_id' => 'booking_breaks']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingBudget() {
        return $this->hasOne(Budget::className(), ['budget_id' => 'booking_budget']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments() {
        return $this->hasOne(Departments::className(), ['departments_id' => 'departments_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingFormat() {
        return $this->hasOne(Format::className(), ['format_id' => 'booking_format']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRoom() {
        return $this->hasOne(Room::className(), ['room_id' => 'booking_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingUsefor() {
        return $this->hasOne(Usefor::className(), ['usefor_id' => 'booking_usefor']);
    }

    // upload file
    public function uploadFiles($model, $attribute) {
        $file = UploadedFile::getInstance($model, $attribute);
        $path = $this->getUploadFilePath();
        if ($this->validate() && $file !== null) {

            $filesName = md5($file->baseName . time()) . '.' . $file->extension;
            if ($file->saveAs($path . $filesName)) {
                return $filesName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getUploadFilePath() {
        return Yii::getAlias('@webroot') . '/' . $this->upload_foler_file . '/';
    }

    public function getUploadFileUrl() {
        return Yii::getAlias('@web') . '/' . $this->upload_foler_file . '/';
    }

    public function getFileViewer() {
        return empty($this->file) ? Yii::getAlias('@web') . '/uploads/img/nofile.png' : $this->getUploadFileUrl() . $this->file;
    }

    /*
     * Line 


      public function notifyLine() {

      // ดึง Token มาจากตาราง assign
      //$lineapi = $this->assign->line_token;
      $lineapi = 'token';

      //Server link
      //$srvlink = "http://172.16.20.34";
      $srvlink = "http://113.53.233.85";
      //ดึงข้อคว่าม
      $msg0 = "\r\nสถานะงาน " . $this->status->status_name; //สถานะ
      $msg1 = "\r\nผู้แจ้งงาน: " . $this->user_request;  //ผู้แจ้งงาน
      $msg2 = "\r\nหน่วยงาน: " . $this->departments->department_name;  //หน่วยงาน
      $msg3 = "\r\nหัวข้อ: " . $this->title;  //หัวข้อ
      $msg4 = "\r\nเลขที่: " . $this->order_no; //เลขที่
      $msg5 = "\r\nวันเวลาที่แจ้ง: " . $this->date_at;  //วันเวลาที่แจ้ง
      $msg6 = "\r\nชนิดอุปกรณ์: " . $this->equipment;  //ชนิดอุปกรณ์
      $msg7 = "\r\nรหัสทรัพย์สิน: " . $this->asset_no;  //รหัสทรัพย์สิน
      $msg8 = "\r\nลิ้งค์: " . $srvlink . Yii::getAlias('@web') . '/orders/' . $this->id;  //รหัสทรัพย์สิน
      $msg9 = $srvlink . $this->photoViewer;  //
      $imageFile = curl_file_create($msg9);
      //ข้อคว่าม
      $massage = $msg0 . $msg1 . $msg2 . $msg3 . $msg4 . $msg5 . $msg6 . $msg7 . $msg8;
      $mms = trim($massage);
      //Line sticker
      $stickerPkg = 2; //stickerPackageId
      $stickerId = 150; //stickerId
      //
      $imageThumbnail = $this->photoViewer; //รูป Thumbnail,
      $imageFullsize = $this->photoViewer; //รูป Fullsize
      // ข้อความที่จะส่ง
      $data_massage = [
      'message' => $mms,
      'stickerPackageId' => $stickerPkg,
      'stickerId' => $stickerId,
      'imageFile' => $imageFile,
      //'imageThumbnail' => $imageThumbnail,
      //'imageFullsize' => $imageFullsize
      ];
      //การทำงานของระบบ
      date_default_timezone_set("Asia/Bangkok");
      $chOne = curl_init();
      curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
      curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($chOne, CURLOPT_POST, 1);
      //curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms&imageThumbnail=$imageThumbnail&imageFullsize=$imageFullsize");
      curl_setopt($chOne, CURLOPT_POSTFIELDS, http_build_query($data_massage)); //โพสท์ข้อความ
      curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
      $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $lineapi . '',);
      curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($chOne);
      if (curl_error($chOne)) {
      echo 'error:' . curl_error($chOne);
      } else {
      $result_ = json_decode($result, true);
      echo "status : " . $result_['status'];
      echo "message : " . $result_['message'];
      }
      curl_close($chOne);
      }
     */
}
