<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_kelas`.
 * Has foreign keys to the tables:
 *
 * - `user`
 * - `user`
 */
class m180119_093334_create_tbl_kelas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_kelas', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            'idx-tbl_kelas-created_by',
            'tbl_kelas',
            'created_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_kelas-created_by',
            'tbl_kelas',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            'idx-tbl_kelas-updated_by',
            'tbl_kelas',
            'updated_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_kelas-updated_by',
            'tbl_kelas',
            'updated_by',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_kelas-created_by',
            'tbl_kelas'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            'idx-tbl_kelas-created_by',
            'tbl_kelas'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_kelas-updated_by',
            'tbl_kelas'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            'idx-tbl_kelas-updated_by',
            'tbl_kelas'
        );

        $this->dropTable('tbl_kelas');
    }
}
