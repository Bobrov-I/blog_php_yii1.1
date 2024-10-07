<?php

class RegisterForm extends CFormModel
{
    public $username;
    public $password;
    public $email;
    public $verifyCode;

    /**
     * @return array validation rules
     */
    public function rules()
    {
        return array(
            array('username, email , password','required'),
            array('username', 'length', 'min' => 2, 'max' => 255),
            array('email', 'email'),
            array('password', 'length', 'min' => 6),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * @return array attribute labels
     */
    public function attributeLabels()
    {
        return array(
            'username' => 'Имя пользователя',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'verifyCode'=>'Код верификации',
        );
    }
}