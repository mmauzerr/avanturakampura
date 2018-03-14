<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "utisci".
 *
 * @property integer $id
 * @property string $img
 */
class Utisci extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'utisci';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
        ];
    }
}
