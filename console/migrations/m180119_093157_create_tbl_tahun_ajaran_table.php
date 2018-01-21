<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_tahun_ajaran`.
 * Has foreign keys to the tables:
 *
 * - `user`
 * - `user`
 */
class m180119_093157_create_tbl_tahun_ajaran_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_tahun_ajaran', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            'idx-tbl_tahun_ajaran-created_by',
            'tbl_tahun_ajaran',
            'created_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_tahun_ajaran-created_by',
            'tbl_tahun_ajaran',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            'idx-tbl_tahun_ajaran-updated_by',
            'tbl_tahun_ajaran',
            'updated_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_tahun_ajaran-updated_by',
            'tbl_tahun_ajaran',
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
            'fk-tbl_tahun_ajaran-created_by',
            'tbl_tahun_ajaran'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            'idx-tbl_tahun_ajaran-created_by',
            'tbl_tahun_ajaran'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_tahun_ajaran-updated_by',
            'tbl_tahun_ajaran'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            'idx-tbl_tahun_ajaran-updated_by',
            'tbl_tahun_ajaran'
        );

        $this->dropTable('tbl_tahun_ajaran');
    }
}
