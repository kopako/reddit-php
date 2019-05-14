<?php

use yii\db\Migration;

/**
 * Class m190508_144649_post
 */
class m190508_144649_post extends Migration
{
    /**
     * Handles the creation of table `{{%post}}`.
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'like' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190508_144649_post cannot be reverted.\n";
        $this->dropTable('{{%post}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190508_144649_post cannot be reverted.\n";

        return false;
    }
    */
}
