<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%talk}}".
 *
 * @property integer $id
 * @property string $content
 * @property integer $browse_num
 * @property integer $comment_num
 * @property integer $praise_num
 * @property integer $tread_num
 */
class Talk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%talk}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['browse_num', 'comment_num', 'praise_num', 'tread_num'], 'integer'],
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
            'content' => '内容',
            'browse_num' => '浏览次数',
            'comment_num' => '评论次数',
            'praise_num' => '赞次数',
            'tread_num' => '踩次数',
        ];
    }
}
