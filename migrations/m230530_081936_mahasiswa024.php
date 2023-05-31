<?php

use yii\db\Migration;

/**
 * Class m230530_081936_mahasiswa024
 */
class m230530_081936_mahasiswa024 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa024}}',[
            'Id024'=> $this->primarykey(),
            'Nim024'=> $this->string(80)->notNull()->unique(),
            'Nama024'=> $this->string(80)->notNull(),
            'Kelas024'=> $this->string(80)->notNull(),
            'Status024'=> $this->string(80)->notNull(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa024}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_081936_mahasiswa024 cannot be reverted.\n";

        return false;
    }
    */
}
