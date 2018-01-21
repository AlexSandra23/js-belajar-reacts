<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SiswaKelasTahunAjaran;

/**
 * SiswaKelasTahunAjaranSearch represents the model behind the search form about `frontend\models\SiswaKelasTahunAjaran`.
 */
class SiswaKelasTahunAjaranSearch extends SiswaKelasTahunAjaran
{
    public $nis;
    public $nama; 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_data_induk_siswa', 'id_kelas_tahun_ajaran', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at','nis','nama'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SiswaKelasTahunAjaran::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('idDataIndukSiswa');

        $dataProvider->sort->attributes['nama'] = [
            'asc' => ['tbl_data_induk_siawa,nama' => SORT_ASC],
            'desc' => ['tbl_data_induk,siswa,nama' => SORT_ASC]
        ];
        $dataProvider->sort->attributes['nis'] = [
            'asc' => ['tbl_data_induk_siawa,nama' => SORT_ASC],
            'desc' => ['tbl_data_induk,siswa,nama' => SORT_ASC]
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_data_induk_siswa' => $this->id_data_induk_siswa,
            'id_kelas_tahun_ajaran' => $this->id_kelas_tahun_ajaran,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
