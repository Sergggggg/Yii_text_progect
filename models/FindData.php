<?php
     
    namespace app\models;
     
    use Yii;      
    /**
     * Find Data from data base
     * 
     */
    class FindData
    {
        /**
         * Get all users and data from database
         */

        public static function getAllUsersData()
        {
            return Yii::$app->db->createCommand('SELECT  tb1.id, tb1.firstname, tb1.lastname, tb2.user_id, tb2.title FROM user as tb1
                
            LEFT JOIN album as tb2 ON tb1.id = tb2.user_id')->queryAll();
        }

        /**
         * Get all photos in  albums from database
         */

        public static function getAllPhotosData()
        {
            return Yii::$app->db->createCommand('SELECT  tb1.user_id, tb1.title, tb2.url, tb2.titles FROM album as tb1
                
            LEFT JOIN photo as tb2 ON tb1.id = tb2.album_id')->queryAll();
        }
    }