<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property string $pkCodPedido
 * @property string $formaPagamento
 * @property string $data
 * @property string $hora
 * @property string $valorTotal
 * @property integer $quantVezes
 * @property integer $Pessoa_pkCodPessoa
 * @property integer $ativo
 * @property string $estabelecimento_pkCodEstabelecimento
 * @property string $status
 * @property string $fkProdutos
 * @property string $usuario_pkCodUsuario
 *
 * The followings are the available model relations:
 * @property Expedicao[] $expedicaos
 * @property Parcela[] $parcelas
 * @property Usuario $usuarioPkCodUsuario
 * @property Estabelecimento $estabelecimentoPkCodEstabelecimento
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pessoa_pkCodPessoa, estabelecimento_pkCodEstabelecimento, usuario_pkCodUsuario', 'required'),
			array('quantVezes, Pessoa_pkCodPessoa, ativo', 'numerical', 'integerOnly'=>true),
			array('formaPagamento, fkProdutos', 'length', 'max'=>45),
			array('valorTotal', 'length', 'max'=>10),
			array('estabelecimento_pkCodEstabelecimento, usuario_pkCodUsuario', 'length', 'max'=>20),
			array('status', 'length', 'max'=>2),
			array('data, hora', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkCodPedido, formaPagamento, data, hora, valorTotal, quantVezes, Pessoa_pkCodPessoa, ativo, estabelecimento_pkCodEstabelecimento, status, fkProdutos, usuario_pkCodUsuario', 'safe', 'on'=>'search'),
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
			'expedicaos' => array(self::HAS_MANY, 'Expedicao', 'pedido_pkCodPedido'),
			'parcelas' => array(self::HAS_MANY, 'Parcela', 'pedido_pkCodPedido'),
			'usuarioPkCodUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_pkCodUsuario'),
			'estabelecimentoPkCodEstabelecimento' => array(self::BELONGS_TO, 'Estabelecimento', 'estabelecimento_pkCodEstabelecimento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkCodPedido' => 'Pk Cod Pedido',
			'formaPagamento' => 'Forma Pagamento',
			'data' => 'Data',
			'hora' => 'Hora',
			'valorTotal' => 'Valor Total',
			'quantVezes' => 'Quant Vezes',
			'Pessoa_pkCodPessoa' => 'Pessoa Pk Cod Pessoa',
			'ativo' => 'Ativo',
			'estabelecimento_pkCodEstabelecimento' => 'Estabelecimento Pk Cod Estabelecimento',
			'status' => 'Status',
			'fkProdutos' => 'Fk Produtos',
			'usuario_pkCodUsuario' => 'Usuario Pk Cod Usuario',
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

		$criteria->compare('pkCodPedido',$this->pkCodPedido,true);
		$criteria->compare('formaPagamento',$this->formaPagamento,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('valorTotal',$this->valorTotal,true);
		$criteria->compare('quantVezes',$this->quantVezes);
		$criteria->compare('Pessoa_pkCodPessoa',$this->Pessoa_pkCodPessoa);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('estabelecimento_pkCodEstabelecimento',$this->estabelecimento_pkCodEstabelecimento,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fkProdutos',$this->fkProdutos,true);
		$criteria->compare('usuario_pkCodUsuario',$this->usuario_pkCodUsuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
