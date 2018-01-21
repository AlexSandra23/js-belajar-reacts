<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataIndukSiswa;

/**
 * DataIndukSiswaSearch represents the model behind the search form about `frontend\models\DataIndukSiswa`.
 */
class DataIndukSiswaSearch extends DataIndukSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nis', 'tahun_masuk', 'created_by', 'updated_by'], 'integer'],
            [['nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'nama_ortu', 'created_at', 'updated_at'], 'safe'],
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
        $query = DataIndukSiswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nis' => $this->nis,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tahun_masuk' => $this->tahun_masuk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nama_ortu', $this->nama_ortu]);

        return $dataProvider;
    }
}
