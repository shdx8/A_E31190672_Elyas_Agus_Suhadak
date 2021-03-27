<?php

class Prodi_model extends CI_Model {

  public function getDataProdi()
  {
    $prodi = [
      [
        'no' => '1',
        'prodi' => 'MIF',
        'keterangan' => 'Manajemen Informatika'
      ],
      [
        'no' => '2',
        'prodi' => 'TKK',
        'keterangan' => 'Teknik Komputer Kontrol'
      ],
      [
        'no' => '3',
        'prodi' => 'TIF',
        'keterangan' => 'Teknik Informatika'
      ],
    ];
    return $prodi;
  }
}