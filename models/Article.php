<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category
 * @property string $content
 * @property integer $browse_num
 * @property integer $comment_num
 * @property integer $collect_num
 * @property integer $praise_num
 * @property integer $tread_num
 * @property integer $status
 */
class Article extends \yii\db\ActiveRecord
{
    const category_php = 1; // PHP
    const category_javascript = 2; // JavaScript
    const category_node = 3; // Node

    public $categoryArray = [
        self::category_php => 'PHP',
        self::category_javascript => 'JavaScript',
        self::category_node => 'Node',
    ];
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'browse_num', 'comment_num', 'collect_num', 'praise_num', 'tread_num', 'status'], 'integer'],
            [['content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 80],
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
            'category' => '类型',
            'content' => '内容',
            'browse_num' => '浏览次数',
            'comment_num' => '评论次数',
            'collect_num' => '收藏次数',
            'praise_num' => '赞次数',
            'tread_num' => '踩次数',
            'status' => '状态（1-显示 2-不显示）',
        ];
    }
}
