<?php

use yii\db\Migration;

class m240602_115700_create_number_table extends Migration
{
    public function up()
    {
        $this->createTable('number', [
            'id' => $this->primaryKey(),
            'value' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('number');
    }
}
