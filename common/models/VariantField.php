<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "variant_field".
 *
 * @property integer $id
 * @property integer $type_id
 * @property string $content
 */
class VariantField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'variant_field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Type ID',
            'content' => 'Content',
        ];
    }
}
