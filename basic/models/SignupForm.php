<?php

namespace app\models;
use yii\base\Model;


class SignupForm extends Model
{
    public $first_name;
    public $last_name;
    public $patronymic;
    public $email;
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'patronymic', 'email', 'username', 'password'], 'required', 'message' => 'Заполните поле'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Этот логин уже занят'],
            ['email', 'email'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'email' => 'Email',
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }
}
