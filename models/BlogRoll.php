<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blogroll}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $link
 * @property integer $status
 * @property integer $created_at
 */
class BlogRoll extends \yii\db\ActiveRecord
{
    const STATUS_SHOW = 1;
    const STATUS_HIDDEN = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blogroll}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at'], 'integer'],
            [['title', 'link'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'link' => '链接',
            'status' => '状态(1-显示，2-不显示)',
            'created_at' => '添加时间',
        ];
    }
}
