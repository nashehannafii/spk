<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kriteria_tabel".
 *
 * @property int $id_kriteria
 * @property string $nama_kriteria
 * @property string $kriteria
 * @property int $bobot
 */
class KriteriaTabel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kriteria_tabel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kriteria', 'kriteria', 'bobot'], 'required'],
            [['bobot'], 'integer'],
            [['nama_kriteria', 'kriteria'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kriteria' => 'Id Kriteria',
            'nama_kriteria' => 'Nama Kriteria',
            'kriteria' => 'Kriteria',
            'bobot' => 'Bobot',
        ];
    }
}
