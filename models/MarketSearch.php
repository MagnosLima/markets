<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Market;

/**
 * MarketSearch represents the model behind the search form of `app\models\Market`.
 */
class MarketSearch extends Market
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'city_id'], 'integer'],
            [['market_name', 'street', 'county', 'zip', 'website', 'facebook', 'twitter', 'youtube', 'othermedia', 'season1date', 'season1time', 'season2date', 'season2time', 'season3date', 'season3time', 'season4date', 'season4time', 'location', 'accepts_credit', 'accepts_wic', 'accepts_wiccash', 'accepts_sfmnp', 'accepts_snap', 'updatetime', 'updatetime_unparsed'], 'safe'],
            [['x', 'y'], 'number'],
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
     *
     * @return ActiveDataProvider
     */

    //Alterações aqui
    //public function search($params, $state_id = null)
    public function search($params, $state_id = null, $product_id = null)
    {
        //select market.* from market
        $query = Market::find();

        /*if($state_id != null){
            $query->innerJoin('city', 'city.id = market.city_id')
            ->where(['city.state_id'=>$state_id]);  
        }*/


        //IN
        if($product_id != null){
            $subquery = ProductMarket::find()->select(['product_market.market_id'])
            ->where(['product_market.product_id'=>$product_id]);
            $query->where(['market.id'=>$subquery]);

            //select market.* from market where market_id in (select market_id from productmarket where product_id = 5);
        }
        
        //EXISTS
        if($product_id != null){
            $subquery = ProductMarket::find()->select(['product_market.market_id'])
            ->where(['product_market.product_id'=>$product_id])
            ->andWhere('product_market.market_id = market.id');

            $query->where(['exists',$subquery]);
        }

        //INNER JOIN
        /*if($product_id != null){            
            $query->distinct()
            ->innerJoin('product_market','product_market.market_id = market.id')
            ->where(['product_market.product_id'=>$product_id]);
        }*/     

        /*
            select market.*
            from market

            where market.id in (
            select product_market.market_id
            from product_market
            where product_market.product_id = 5);
        */

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
            'x' => $this->x,
            'y' => $this->y,
            'city_id' => $this->city_id,
        ]);

        $query->andFilterWhere(['like', 'market_name', $this->market_name])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'county', $this->county])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'youtube', $this->youtube])
            ->andFilterWhere(['like', 'othermedia', $this->othermedia])
            ->andFilterWhere(['like', 'season1date', $this->season1date])
            ->andFilterWhere(['like', 'season1time', $this->season1time])
            ->andFilterWhere(['like', 'season2date', $this->season2date])
            ->andFilterWhere(['like', 'season2time', $this->season2time])
            ->andFilterWhere(['like', 'season3date', $this->season3date])
            ->andFilterWhere(['like', 'season3time', $this->season3time])
            ->andFilterWhere(['like', 'season4date', $this->season4date])
            ->andFilterWhere(['like', 'season4time', $this->season4time])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'accepts_credit', $this->accepts_credit])
            ->andFilterWhere(['like', 'accepts_wic', $this->accepts_wic])
            ->andFilterWhere(['like', 'accepts_wiccash', $this->accepts_wiccash])
            ->andFilterWhere(['like', 'accepts_sfmnp', $this->accepts_sfmnp])
            ->andFilterWhere(['like', 'accepts_snap', $this->accepts_snap])
            ->andFilterWhere(['like', 'updatetime', $this->updatetime])
            ->andFilterWhere(['like', 'updatetime_unparsed', $this->updatetime_unparsed]);

        return $dataProvider;
    }
}
