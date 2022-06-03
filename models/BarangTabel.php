<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang_tabel".
 *
 * @property int $id
 * @property string $nama_barang
 * @property int $keuntungan_nilai
 * @property int $penjualan_nilai
 * @property int $harga_nilai
 */
class BarangTabel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_tabel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'keuntungan_nilai', 'penjualan_nilai', 'harga_nilai'], 'required'],
            [['keuntungan_nilai', 'penjualan_nilai', 'harga_nilai'], 'integer'],
            [['nama_barang'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama Barang',
            'keuntungan_nilai' => 'Keuntungan Nilai',
            'penjualan_nilai' => 'Penjualan Nilai',
            'harga_nilai' => 'Harga Nilai',
        ];
    }
}
