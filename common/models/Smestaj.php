<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "smestaj".
 *
 * @property integer $id
 * @property string $content
 * @property string $img
 */
class Smestaj extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'smestaj';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
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
            'content' => 'Content',
            'img' => 'Img',
        ];
    }
}
