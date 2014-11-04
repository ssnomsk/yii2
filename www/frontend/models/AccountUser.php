<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $key

 */
class AccountUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],

        ];
    }

}