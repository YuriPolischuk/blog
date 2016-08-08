<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tbl_user".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $role
 *
 * @property Post[] $Posts
 */
class User extends \yii\db\ActiveRecord 
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email', 'role'], 'required'],
            [['role'], 'integer'],
            [['login'], 'string', 'max' => 40],
            [['password', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPosts()
    {
        return $this->hasMany(Post::className(), ['author_id' => 'id']);
    }
}
