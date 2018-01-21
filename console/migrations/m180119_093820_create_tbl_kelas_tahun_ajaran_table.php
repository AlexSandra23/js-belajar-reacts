<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_kelas_tahun_ajaran`.
 * Has foreign keys to the tables:
 *
 * - `tbl_tahun_ajaran`
 * - `tbl_kelas`
 * - `user`
 * - `user`
 */
class m180119_093820_create_tbl_kelas_tahun_ajaran_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_kelas_tahun_ajaran', [
            'id' => $this->primaryKey(),
            'id_tahun_ajaran' => $this->integer()->notNull(),
            'id_kelas' => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        // creates index for column `id_tahun_ajaran`
        $this->createIndex(
            'idx-tbl_kelas_tahun_ajaran-id_tahun_ajaran',
            'tbl_kelas_tahun_ajaran',
            'id_tahun_ajaran'
        );

        // add foreign key for table `tbl_tahun_ajaran`
        $this->addForeignKey(
            'fk-tbl_kelas_tahun_ajaran-id_tahun_ajaran',
            'tbl_kelas_tahun_ajaran',
            'id_tahun_ajaran',
            'tbl_tahun_ajaran',
            'id',
            'CASCADE'
        );

        // creates index for column `id_kelas`
        $this->createIndex(
            'idx-tbl_kelas_tahun_ajaran-id_kelas',
            'tbl_kelas_tahun_ajaran',
            'id_kelas'
        );

        // add foreign key for table `tbl_kelas`
        $this->addForeignKey(
            'fk-tbl_kelas_tahun_ajaran-id_kelas',
            'tbl_kelas_tahun_ajaran',
            'id_kelas',
            'tbl_kelas',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            'idx-tbl_kelas_tahun_ajaran-created_by',
            'tbl_kelas_tahun_ajaran',
            'created_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_kelas_tahun_ajaran-created_by',
            'tbl_kelas_tahun_ajaran',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_at`
        $this->createIndex(
            'idx-tbl_kelas_tahun_ajaran-updated_at',
            'tbl_kelas_tahun_ajaran',
            'updated_at'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_kelas_tahun_ajaran-updated_at',
            'tbl_kelas_tahun_ajaran',
            'updated_at',
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
        // drops foreign key for table `tbl_tahun_ajaran`
        $this->dropForeignKey(
            'fk-tbl_kelas_tahun_ajaran-id_tahun_ajaran',
            'tbl_kelas_tahun_ajaran'
        );

        // drops index for column `id_tahun_ajaran`
        $this->dropIndex(
            'idx-tbl_kelas_tahun_ajaran-id_tahun_ajaran',
            'tbl_kelas_tahun_ajaran'
        );

        // drops foreign key for table `tbl_kelas`
        $this->dropForeignKey(
            'fk-tbl_kelas_tahun_ajaran-id_kelas',
            'tbl_kelas_tahun_ajaran'
        );

        // drops index for column `id_kelas`
        $this->dropIndex(
            'idx-tbl_kelas_tahun_ajaran-id_kelas',
            'tbl_kelas_tahun_ajaran'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_kelas_tahun_ajaran-created_by',
            'tbl_kelas_tahun_ajaran'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            'idx-tbl_kelas_tahun_ajaran-created_by',
            'tbl_kelas_tahun_ajaran'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_kelas_tahun_ajaran-updated_at',
            'tbl_kelas_tahun_ajaran'
        );

        // drops index for column `updated_at`
        $this->dropIndex(
            'idx-tbl_kelas_tahun_ajaran-updated_at',
            'tbl_kelas_tahun_ajaran'
        );

        $this->dropTable('tbl_kelas_tahun_ajaran');
    }
}
