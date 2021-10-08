<?php

use yii\db\Migration;

/**
 * Class m211004_131612_album
 */
class m211004_131612_album extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%album}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m211004_131612_album cannot be reverted.\n";

        // return false;
        $this->dropTable('{{%album}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211004_131612_album cannot be reverted.\n";

        return false;
    }
    */
}
