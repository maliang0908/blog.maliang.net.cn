<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%leave_word}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $content
 */
class LeaveWord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%leave_word}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'content' => '内容',
        ];
    }
}
