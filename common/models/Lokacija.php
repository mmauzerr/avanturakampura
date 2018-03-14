<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lokacija".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $img
 */
class Lokacija extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lokacija';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'img' => 'Img',
        ];
    }
}
