<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_master".
 *
 * @property int $id
 * @property int $category_id
 * @property int $offer_id
 * @property string $name
 * @property string $description
 * @property string $base_quantity
 * @property string $base_unit
 * @property float $mrp
 * @property float $discounted_percentage
 * @property float $discounted_amount
 * @property float $selling_amount
 * @property string $image
 * @property string $created_on
 * @property string $status
 * @property int $vendor_id
 * @property int $rank
 */
class productmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'offer_id', 'name', 'description', 'base_quantity', 'base_unit', 'mrp', 'discounted_percentage', 'discounted_amount', 'selling_amount', 'image', 'created_on', 'vendor_id'], 'required'],
            [['category_id', 'offer_id', 'vendor_id', 'rank'], 'integer'],
            [['mrp', 'discounted_percentage', 'discounted_amount', 'selling_amount'], 'number'],
            [['status'], 'string'],
            [['name', 'image'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 500],
            [['base_quantity', 'base_unit'], 'string', 'max' => 10],
            [['created_on'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'offer_id' => 'Offer ID',
            'name' => 'Name',
            'description' => 'Description',
            'base_quantity' => 'Base Quantity',
            'base_unit' => 'Base Unit',
            'mrp' => 'Mrp',
            'discounted_percentage' => 'Discounted Percentage',
            'discounted_amount' => 'Discounted Amount',
            'selling_amount' => 'Selling Amount',
            'image' => 'Image',
            'created_on' => 'Created On',
            'status' => 'Status',
            'vendor_id' => 'Vendor ID',
            'rank' => 'Rank',
        ];
    }
}
