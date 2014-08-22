<?php

/**
 * This is the model class for table "estabelecimento".
 *
 * The followings are the available columns in table 'estabelecimento':
 * @property string $pkCodEstabelecimento
 * @property string $cnpj
 * @property string $tipo
 * @property string $descricao
 * @property string $regiao
 * @property string $nomeFantazia
 * @property string $imagem
 * @property string $ceps_entrega
 *
 * The followings are the available model relations:
 * @property Cardapio[] $cardapios
 * @property Pedido[] $pedidos
 * @property Produtos[] $produtoses
 */
class Estabelecimento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estabelecimento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cnpj, regiao, ceps_entrega', 'length', 'max'=>45),
			array('tipo, nomeFantazia, imagem', 'length', 'max'=>255),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkCodEstabelecimento, cnpj, tipo, descricao, regiao, nomeFantazia, imagem, ceps_entrega', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cardapios' => array(self::HAS_MANY, 'Cardapio', 'estabelecimento_pkCodEstabelecimento'),
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'estabelecimento_pkCodEstabelecimento'),
			'produtoses' => array(self::HAS_MANY, 'Produtos', 'estabelecimento_pkCodEstabelecimento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkCodEstabelecimento' => 'Pk Cod Estabelecimento',
			'cnpj' => 'Cnpj',
			'tipo' => 'Tipo',
			'descricao' => 'Descricao',
			'regiao' => 'Regiao',
			'nomeFantazia' => 'Nome Fantazia',
			'imagem' => 'Imagem',
			'ceps_entrega' => 'Ceps Entrega',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pkCodEstabelecimento',$this->pkCodEstabelecimento,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('regiao',$this->regiao,true);
		$criteria->compare('nomeFantazia',$this->nomeFantazia,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('ceps_entrega',$this->ceps_entrega,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estabelecimento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
