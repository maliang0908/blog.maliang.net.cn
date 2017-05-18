<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property string $avatar
 * @property integer $status
 * @property integer $created_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['username', 'password'], 'string', 'max' => 32],
            [['nickname'], 'string', 'max' => 10],
            [['avatar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'nickname' => '昵称',
            'avatar' => '头像',
            'status' => '状态（1-正常，2-冻结）',
            'created_at' => '创建时间',
        ];
    }
}
