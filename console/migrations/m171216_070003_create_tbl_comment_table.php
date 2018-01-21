<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_comment`.
 */
class m171216_070003_create_tbl_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_comment', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'message' => $this->text()->notnull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tbl_comment');
    }
}
