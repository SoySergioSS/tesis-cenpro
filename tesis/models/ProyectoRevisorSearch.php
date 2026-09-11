<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProyectoRevisor;

/**
 * ProyectoRevisorSearch represents the model behind the search form of `app\models\ProyectoRevisor`.
 */
class ProyectoRevisorSearch extends ProyectoRevisor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_proyecto_tesis', 'id_profesor'], 'integer'],
            [['prorev_dtfechaderevision', 'prorev_dthoraderevision'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = ProyectoRevisor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_proyecto_tesis' => $this->id_proyecto_tesis,
            'id_profesor' => $this->id_profesor,
            'prorev_dtfechaderevision' => $this->prorev_dtfechaderevision,
            'prorev_dthoraderevision' => $this->prorev_dthoraderevision,
        ]);

        return $dataProvider;
    }
}
