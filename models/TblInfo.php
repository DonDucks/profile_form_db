<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_info".
 *
 * @property string $firstname
 * @property string $lastname
 * @property integer $person_id
 * @property string $emailaddress
 * @property string $address
 */
class TblInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'emailaddress'], 'required'],
            
            [['firstname', 'lastname'], 'string', 'max' => 50],
            
            [['emailaddress'], 'string', 'max' => 150],
            
            [['address'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'person_id' => 'Person ID',
            'emailaddress' => 'Emailaddress',
            'address' => 'Address',
        ];
    }
}
