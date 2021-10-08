<?php

    namespace app\models;
     
    use Yii;
    use yii\base\Model;
     
    /**
     * Signup form
     */
    class SignupForm extends Model
    {
     
        //public $username;
        public $firstname;
        public $lastname;
        public $email;
        public $password;
     
        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                ['firstname', 'trim'],
                ['firstname', 'required'],
                ['firstname', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
                ['firstname', 'string', 'min' => 2, 'max' => 255],
                
                ['lastname', 'trim'],
                ['lastname', 'required'],
                ['lastname', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
                ['lastname', 'string', 'min' => 2, 'max' => 255],

                ['email', 'trim'],
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
                ['password', 'required'],
                ['password', 'string', 'min' => 6],
            ];
        }
     
        /**
         * Signs user up.
         *
         * @return User|null the saved model or null if saving fails
         */
        public function signup()
        {
     
            if (!$this->validate()) {
                return null;
            }
     
            $user = new User();
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            return $user->save() ? $user : null;
        }
     
    }