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
    const CATEGORY_PHP = 1; // PHP
    const CATEGORY_JAVASCRIPT = 2; // JavaScript
    const CATEGORY_NODE = 3; // Node
    const CATEGORY_YII2 = 4; // Yii2
    const CATEGORY_LINUX = 5; // LINUX

    const SORT_NEW = 1; // 最新
    const SORT_BROWSE = 2; // 浏览
    const SORT_COLLECT = 3; // 收藏
    const SORT_COMMENT= 4; // 评论

    public $categoryArray = [
        self::CATEGORY_PHP => 'PHP',
        self::CATEGORY_JAVASCRIPT => 'JavaScript',
        self::CATEGORY_NODE => 'Node',
        self::CATEGORY_YII2 => 'Yii2',
        self::CATEGORY_LINUX => 'Linux',
    ];

    public static $sortArray = [
        self::SORT_NEW => '最新发布',
        self::SORT_BROWSE => '最多浏览',
        self::SORT_COLLECT => '最多收藏',
        self::SORT_COMMENT => '最多评论'
    ];

    public static $sortFieldArray = [
        self::SORT_NEW => 'created_at',
        self::SORT_BROWSE => 'browse_num',
        self::SORT_COLLECT => 'collect_num',
        self::SORT_COMMENT => 'comment_num'
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
            [['title', 'category', 'content'], 'required'],
            [['category', 'browse_num', 'comment_num', 'collect_num', 'praise_num', 'tread_num', 'status'], 'integer'],
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
