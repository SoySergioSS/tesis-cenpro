<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Docente;

/**
 * DocenteSearch represents the model behind the search form of `app\models\Docente`.
 */
class DocenteSearch extends Docente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_facultad'], 'integer'],
            [['doc_vcnombre', 'doc_vctelefono', 'doc_vccorreo', 'doc_vcdireccion', 'doc_vccorreo2', 'doc_vcapellido', 'doc_vcsexo', 'doc_vcpassword'], 'safe'],
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
        $query = Docente::find();

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
            'id_facultad' => $this->id_facultad,
        ]);

        $query->andFilterWhere(['like', 'doc_vcnombre', $this->doc_vcnombre])
            ->andFilterWhere(['like', 'doc_vctelefono', $this->doc_vctelefono])
            ->andFilterWhere(['like', 'doc_vccorreo', $this->doc_vccorreo])
            ->andFilterWhere(['like', 'doc_vcdireccion', $this->doc_vcdireccion])
            ->andFilterWhere(['like', 'doc_vccorreo2', $this->doc_vccorreo2])
            ->andFilterWhere(['like', 'doc_vcapellido', $this->doc_vcapellido])
            ->andFilterWhere(['like', 'doc_vcsexo', $this->doc_vcsexo])
            ->andFilterWhere(['like', 'doc_vcpassword', $this->doc_vcpassword]);

        return $dataProvider;
    }
}
