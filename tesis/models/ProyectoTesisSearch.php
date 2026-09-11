<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProyectoTesis;

/**
 * ProyectoTesisSearch represents the model behind the search form of `app\models\ProyectoTesis`.
 */
class ProyectoTesisSearch extends ProyectoTesis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_estado_proyecto', 'protes_iCancelado', 'protes_iEnviado', 'protes_iAprobado', 'protes_iObservado'], 'integer'],
            [['protes_vctitulo', 'protes_vcareadeinvestigacion', 'protes_vclineadeinvestigacion', 'protes_dtfechadeinicio', 'protes_dtfechadefin', 'protes_vcresumenejecutivo', 'protes_vcobjetivoespecifico', 'protes_vcjustificacion', 'protes_vcmetasespecificas', 'protes_vcresolucion', 'protes_dtFechaResolucion', 'protes_vcexpediente', 'protes_dtFechaExpediente'], 'safe'],
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
        $query = ProyectoTesis::find();

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
            'id_estado_proyecto' => $this->id_estado_proyecto,
            'protes_dtfechadeinicio' => $this->protes_dtfechadeinicio,
            'protes_dtfechadefin' => $this->protes_dtfechadefin,
            'protes_iCancelado' => $this->protes_iCancelado,
            'protes_iEnviado' => $this->protes_iEnviado,
            'protes_iAprobado' => $this->protes_iAprobado,
            'protes_dtFechaResolucion' => $this->protes_dtFechaResolucion,
            'protes_iObservado' => $this->protes_iObservado,
            'protes_dtFechaExpediente' => $this->protes_dtFechaExpediente,
        ]);

        $query->andFilterWhere(['like', 'protes_vctitulo', $this->protes_vctitulo])
            ->andFilterWhere(['like', 'protes_vcareadeinvestigacion', $this->protes_vcareadeinvestigacion])
            ->andFilterWhere(['like', 'protes_vclineadeinvestigacion', $this->protes_vclineadeinvestigacion])
            ->andFilterWhere(['like', 'protes_vcresumenejecutivo', $this->protes_vcresumenejecutivo])
            ->andFilterWhere(['like', 'protes_vcobjetivoespecifico', $this->protes_vcobjetivoespecifico])
            ->andFilterWhere(['like', 'protes_vcjustificacion', $this->protes_vcjustificacion])
            ->andFilterWhere(['like', 'protes_vcmetasespecificas', $this->protes_vcmetasespecificas])
            ->andFilterWhere(['like', 'protes_vcresolucion', $this->protes_vcresolucion])
            ->andFilterWhere(['like', 'protes_vcexpediente', $this->protes_vcexpediente]);

        return $dataProvider;
    }
}
