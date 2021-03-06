<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 */
class Services extends \yii\db\ActiveRecord
{
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'services';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['name', 'text'], 'required'],
      [['text'], 'string'],
      [['name'], 'string', 'max' => 100],
      [['name', 'text'], 'filter', 'filter'=>'trim']
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
      'id' => 'Номер',
      'name' => 'Название',
      'text' => 'Текст',
    ];
  }
}
