<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_data_induk_siswa`.
 * Has foreign keys to the tables:
 *
 * - `user`
 * - `user`
 */
class m180119_093551_create_tbl_data_induk_siswa_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_data_induk_siswa', [
            'id' => $this->primaryKey(),
            'nis' => $this->integer()->notNull(),
            'nama' => $this->string(255)->notNull(),
            'alamat' => $this->string(255)->notNull(),
            'tempat_lahir' => $this->string(255)->notNull(),
            'tanggal_lahir' => $this->date()->notNull(),
            'nama_ortu' => $this->string(255)->notNull(),
            'tahun_masuk' => $this->integer()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            'idx-tbl_data_induk_siswa-created_by',
            'tbl_data_induk_siswa',
            'created_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_data_induk_siswa-created_by',
            'tbl_data_induk_siswa',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            'idx-tbl_data_induk_siswa-updated_by',
            'tbl_data_induk_siswa',
            'updated_by'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-tbl_data_induk_siswa-updated_by',
            'tbl_data_induk_siswa',
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
            'fk-tbl_data_induk_siswa-created_by',
            'tbl_data_induk_siswa'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            'idx-tbl_data_induk_siswa-created_by',
            'tbl_data_induk_siswa'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-tbl_data_induk_siswa-updated_by',
            'tbl_data_induk_siswa'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            'idx-tbl_data_induk_siswa-updated_by',
            'tbl_data_induk_siswa'
        );

        $this->dropTable('tbl_data_induk_siswa');
    }
}
