<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_siswa_kelas_tahun_ajaran`.
 * Has foreign keys to the tables:
 *
 * - `tbl_data_induk_siswa`
 * - `tbl_kelas_tahun_ajaran`
 * - `tbl_user`
 * - `tbl_user`
 */
class m180119_093933_create_tbl_siswa_kelas_tahun_ajaran_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_siswa_kelas_tahun_ajaran', [
            'id' => $this->primaryKey(),
            'id_data_induk_siswa' => $this->integer()->notNull(),
            'id_kelas_tahun_ajaran' => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);

        // creates index for column `id_data_induk_siswa`
        $this->createIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-id_data_induk_siswa',
            'tbl_siswa_kelas_tahun_ajaran',
            'id_data_induk_siswa'
        );

        // add foreign key for table `tbl_data_induk_siswa`
        $this->addForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-id_data_induk_siswa',
            'tbl_siswa_kelas_tahun_ajaran',
            'id_data_induk_siswa',
            'tbl_data_induk_siswa',
            'id',
            'CASCADE'
        );

        // creates index for column `id_kelas_tahun_ajaran`
        $this->createIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-id_kelas_tahun_ajaran',
            'tbl_siswa_kelas_tahun_ajaran',
            'id_kelas_tahun_ajaran'
        );

        // add foreign key for table `tbl_kelas_tahun_ajaran`
        $this->addForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-id_kelas_tahun_ajaran',
            'tbl_siswa_kelas_tahun_ajaran',
            'id_kelas_tahun_ajaran',
            'tbl_kelas_tahun_ajaran',
            'id',
            'CASCADE'
        );

        // creates index for column `created_by`
        $this->createIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-created_by',
            'tbl_siswa_kelas_tahun_ajaran',
            'created_by'
        );

        // add foreign key for table `tbl_user`
        $this->addForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-created_by',
            'tbl_siswa_kelas_tahun_ajaran',
            'created_by',
            'tbl_user',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-updated_by',
            'tbl_siswa_kelas_tahun_ajaran',
            'updated_by'
        );

        // add foreign key for table `tbl_user`
        $this->addForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-updated_by',
            'tbl_siswa_kelas_tahun_ajaran',
            'updated_by',
            'tbl_user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `tbl_data_induk_siswa`
        $this->dropForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-id_data_induk_siswa',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops index for column `id_data_induk_siswa`
        $this->dropIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-id_data_induk_siswa',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops foreign key for table `tbl_kelas_tahun_ajaran`
        $this->dropForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-id_kelas_tahun_ajaran',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops index for column `id_kelas_tahun_ajaran`
        $this->dropIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-id_kelas_tahun_ajaran',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops foreign key for table `tbl_user`
        $this->dropForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-created_by',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-created_by',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops foreign key for table `tbl_user`
        $this->dropForeignKey(
            'fk-tbl_siswa_kelas_tahun_ajaran-updated_by',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            'idx-tbl_siswa_kelas_tahun_ajaran-updated_by',
            'tbl_siswa_kelas_tahun_ajaran'
        );

        $this->dropTable('tbl_siswa_kelas_tahun_ajaran');
    }
}
