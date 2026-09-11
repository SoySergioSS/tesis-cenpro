<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumno;

/**
 * AlumnoSearch represents the model behind the search form of `app\models\Alumno`.
 */
class AlumnoSearch extends Alumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_escuela'], 'integer'],
            [['alu_vcnombre', 'alu_vcapellido', 'alu_vccodigo', 'alu_vcsexo', 'alu_vccorreo', 'alu_vcpassword', 'alu_vctelefono'], 'safe'],
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
        $query = Alumno::find();

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
            'id_escuela' => $this->id_escuela,
        ]);

        $query->andFilterWhere(['like', 'alu_vcnombre', $this->alu_vcnombre])
            ->andFilterWhere(['like', 'alu_vcapellido', $this->alu_vcapellido])
            ->andFilterWhere(['like', 'alu_vccodigo', $this->alu_vccodigo])
            ->andFilterWhere(['like', 'alu_vcsexo', $this->alu_vcsexo])
            ->andFilterWhere(['like', 'alu_vccorreo', $this->alu_vccorreo])
            ->andFilterWhere(['like', 'alu_vcpassword', $this->alu_vcpassword])
            ->andFilterWhere(['like', 'alu_vctelefono', $this->alu_vctelefono]);

        return $dataProvider;
    }
}
