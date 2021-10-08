<?php

use yii\db\Migration;

/**
 * Class m211004_133324_photo
 */
class m211004_133324_photo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%photo}}', [
            'id' => $this->primaryKey(),
            'album_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            //'username' => $this->string()->notNull()->unique(),
            

            // 'firstname' => $this->string()->notNull(),
            // 'lastname' => $this->string()->notNull(),    
            // 'auth_key' => $this->string(32)->notNull(),
            // 'password_hash' => $this->string()->notNull(),
            // 'password_reset_token' => $this->string()->unique(),
            // 'email' => $this->string()->notNull()->unique(),
            // 'status' => $this->smallInteger()->notNull()->defaultValue(10),
            // 'created_at' => $this->integer()->notNull(),
            // 'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%photo}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211004_133324_photo cannot be reverted.\n";

        return false;
    }
    */
}
