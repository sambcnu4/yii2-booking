<?php

namespace app\modules\contact\models;

use Yii;

/**
 * This is the model class for table "yellow_page_status".
 *
 * @property int $id
 * @property string $status สถานะ
 * @property string $color สี
 *
 * @property YellowPage[] $yellowPages
 */
class YellowPageStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yellow_page_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'สถานะ',
            'color' => 'สี',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYellowPages()
    {
        return $this->hasMany(YellowPage::className(), ['status_id' => 'id']);
    }
}
