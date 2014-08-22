<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $pkCodUsuario
 * @property string $nome
 * @property string $telCelular
 * @property string $telFixo
 * @property string $rg
 * @property string $cpf
 * @property string $dataEntrada
 * @property string $dataSaida
 * @property string $senha
 * @property string $email
 * @property integer $ativo
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property Endereco[] $enderecos
 * @property Pedido[] $pedidos
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ativo', 'numerical', 'integerOnly'=>true),
			array('nome, senha, email', 'length', 'max'=>255),
			array('telCelular, telFixo, rg, cpf, dataEntrada, dataSaida, tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkCodUsuario, nome, telCelular, telFixo, rg, cpf, dataEntrada, dataSaida, senha, email, ativo, tipo', 'safe', 'on'=>'search'),
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
			'enderecos' => array(self::HAS_MANY, 'Endereco', 'usuario_pkCodUsuario'),
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'usuario_pkCodUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkCodUsuario' => 'Pk Cod Usuario',
			'nome' => 'Nome',
			'telCelular' => 'Tel Celular',
			'telFixo' => 'Tel Fixo',
			'rg' => 'Rg',
			'cpf' => 'Cpf',
			'dataEntrada' => 'Data Entrada',
			'dataSaida' => 'Data Saida',
			'senha' => 'Senha',
			'email' => 'Email',
			'ativo' => 'Ativo',
			'tipo' => 'Tipo',
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

		$criteria->compare('pkCodUsuario',$this->pkCodUsuario,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('telCelular',$this->telCelular,true);
		$criteria->compare('telFixo',$this->telFixo,true);
		$criteria->compare('rg',$this->rg,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('dataEntrada',$this->dataEntrada,true);
		$criteria->compare('dataSaida',$this->dataSaida,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
