<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%collect}}".
 *
 * @property integer $id
 * @property integer $pid
 */
class Collect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%collect}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => '收藏ID',
        ];
    }
}
