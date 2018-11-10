<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "market".
 *
 * @property int $id
 * @property string $market_name
 * @property string $street
 * @property string $county
 * @property string $zip
 * @property string $website
 * @property string $facebook
 * @property string $twitter
 * @property string $youtube
 * @property string $othermedia
 * @property string $season1date
 * @property string $season1time
 * @property string $season2date
 * @property string $season2time
 * @property string $season3date
 * @property string $season3time
 * @property string $season4date
 * @property string $season4time
 * @property string $x
 * @property string $y
 * @property string $location
 * @property string $accepts_credit
 * @property string $accepts_wic
 * @property string $accepts_wiccash
 * @property string $accepts_sfmnp
 * @property string $accepts_snap
 * @property string $updatetime
 * @property string $updatetime_unparsed
 * @property int $city_id
 *
 * @property City $city
 * @property ProductMarket[] $productMarkets
 * @property Product[] $products
 */
class Market extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'market';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'market_name', 'accepts_credit', 'accepts_wic', 'accepts_wiccash', 'accepts_sfmnp', 'accepts_snap', 'updatetime_unparsed'], 'required'],
            [['id', 'city_id'], 'integer'],
            [['x', 'y'], 'number'],
            [['market_name'], 'string', 'max' => 94],
            [['street'], 'string', 'max' => 179],
            [['county', 'updatetime_unparsed'], 'string', 'max' => 22],
            [['zip'], 'string', 'max' => 10],
            [['website'], 'string', 'max' => 158],
            [['facebook'], 'string', 'max' => 134],
            [['twitter'], 'string', 'max' => 89],
            [['youtube'], 'string', 'max' => 85],
            [['othermedia'], 'string', 'max' => 119],
            [['season1date'], 'string', 'max' => 38],
            [['season1time'], 'string', 'max' => 161],
            [['season2date'], 'string', 'max' => 34],
            [['season2time'], 'string', 'max' => 154],
            [['season3date'], 'string', 'max' => 33],
            [['season3time'], 'string', 'max' => 126],
            [['season4date'], 'string', 'max' => 24],
            [['season4time'], 'string', 'max' => 43],
            [['location'], 'string', 'max' => 65],
            [['accepts_credit', 'accepts_wic', 'accepts_wiccash', 'accepts_sfmnp', 'accepts_snap'], 'string', 'max' => 5],
            [['updatetime'], 'string', 'max' => 25],
            [['id'], 'unique'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'market_name' => Yii::t('app', 'Market Name'),
            'street' => Yii::t('app', 'Street'),
            'county' => Yii::t('app', 'County'),
            'zip' => Yii::t('app', 'Zip'),
            'website' => Yii::t('app', 'Website'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'youtube' => Yii::t('app', 'Youtube'),
            'othermedia' => Yii::t('app', 'Othermedia'),
            'season1date' => Yii::t('app', 'Season1date'),
            'season1time' => Yii::t('app', 'Season1time'),
            'season2date' => Yii::t('app', 'Season2date'),
            'season2time' => Yii::t('app', 'Season2time'),
            'season3date' => Yii::t('app', 'Season3date'),
            'season3time' => Yii::t('app', 'Season3time'),
            'season4date' => Yii::t('app', 'Season4date'),
            'season4time' => Yii::t('app', 'Season4time'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'location' => Yii::t('app', 'Location'),
            'accepts_credit' => Yii::t('app', 'Accepts Credit'),
            'accepts_wic' => Yii::t('app', 'Accepts Wic'),
            'accepts_wiccash' => Yii::t('app', 'Accepts Wiccash'),
            'accepts_sfmnp' => Yii::t('app', 'Accepts Sfmnp'),
            'accepts_snap' => Yii::t('app', 'Accepts Snap'),
            'updatetime' => Yii::t('app', 'Updatetime'),
            'updatetime_unparsed' => Yii::t('app', 'Updatetime Unparsed'),
            'city_id' => Yii::t('app', 'City ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductMarkets()
    {
        return $this->hasMany(ProductMarket::className(), ['market_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('product_market', ['market_id' => 'id']);
    }
}
