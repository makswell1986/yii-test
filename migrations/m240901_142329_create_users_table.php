<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m240901_142329_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string(64)->notNull(),
            'first_name' => $this->string(64)->notNull(),
            'username' => $this->string(15)->notNull(),
            'password' => $this->string(32)->notNull(),
            'auth_key' => $this->string(32)->Null(),
            'access_token' => $this->string(32)->Null(),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
