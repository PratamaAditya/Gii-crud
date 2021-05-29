<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $Id_barang
 * @property int $Id
 * @property string $kode_barang
 * @property string $nama_barang
 * @property string $satuan
 * @property int $id_jenis
 * @property int $id_supplier
 * @property float $harga
 * @property int $stok
 *
 * @property Jenis $jenis
 * @property Supplier $supplier
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_barang', 'Id', 'kode_barang', 'nama_barang', 'satuan', 'id_jenis', 'id_supplier', 'harga', 'stok'], 'required'],
            [['Id_barang', 'Id', 'id_jenis', 'id_supplier', 'stok'], 'integer'],
            [['harga'], 'number'],
            [['kode_barang'], 'string', 'max' => 10],
            [['nama_barang'], 'string', 'max' => 50],
            [['satuan'], 'string', 'max' => 20],
            [['Id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_barang' => 'Id Barang',
            'Id' => 'ID',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'satuan' => 'Satuan',
            'id_jenis' => 'Id Jenis',
            'id_supplier' => 'Id Supplier',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }

    /**
     * Gets query for [[Jenis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_jenis']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'id_supplier']);
    }
}
