<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acesso".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $userName
 * @property string $password
 * @property string $authKey
 */
class Acesso extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'acesso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'userName', 'password', 'authKey'], 'required'],
            [['firstName', 'lastName'], 'string', 'max' => 250],
            [['userName', 'password'], 'string', 'max' => 45],
            [['authKey'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'userName' => 'User Name',
            'password' => 'Password',
            'authKey' => 'Auth Key',
        ];
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }
    public function getAuthKey(){
        return $this->authKey;
    }
    public function getId(){
        return $this->id;
    }
    public static function findIdentityByAccessToken($token, $type = null){
        throw new \yii\base\NotSupportedException();
    }
    public static function findIdentity($id){
        return self::findOne($id);
    }
    public static function findByUsername($userName){
            return self::findOne(['username' =>$userName]);
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}
