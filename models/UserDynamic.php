<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user_dynamic}}".
 *
 * @property integer $id
 * @property integer $category
 * @property integer $user_id
 * @property integer $created_at
 */
class UserDynamic extends \yii\db\ActiveRecord
{
    const CATEGORY_ARTICLE = 1; //文章
    const CATEGORY_COMMENT = 2; //评论
    const CATEGORY_TALK = 3; //说说
    const CATEGORY_LEAVE_WORD = 4; //留言

    public $categoryArray = [
        self::CATEGORY_ARTICLE => '文章',
        self::CATEGORY_COMMENT => '评论',
        self::CATEGORY_TALK => '说说',
        self::CATEGORY_LEAVE_WORD => '留言',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_dynamic}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'user_id', 'created_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => '类型',
            'user_id' => '用户ID',
            'created_at' => '时间',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'id']);
    }

    public function getTalk()
    {
        return $this->hasOne(Talk::className(), ['id' => 'id']);
    }
}
