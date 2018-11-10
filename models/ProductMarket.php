<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_market".
 *
 * @property int $product_id
 * @property int $market_id
 *
 * @property Product $product
 * @property Market $market
 */
class ProductMarket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_market';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'market_id'], 'required'],
            [['product_id', 'market_id'], 'integer'],
            [['product_id', 'market_id'], 'unique', 'targetAttribute' => ['product_id', 'market_id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['market_id'], 'exist', 'skipOnError' => true, 'targetClass' => Market::className(), 'targetAttribute' => ['market_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => Yii::t('app', 'Product ID'),
            'market_id' => Yii::t('app', 'Market ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarket()
    {
        return $this->hasOne(Market::className(), ['id' => 'market_id']);
    }
}
