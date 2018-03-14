<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dnevni_raspored".
 *
 * @property integer $id
 * @property string $content
 */
class DnevniRaspored extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dnevni_raspored';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
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
        ];
    }
}
