<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
  protected $table = 'data_tempat_wisata';
  protected $fillable = ['nama_tempat_wisata','harga_tiket','kebersihan','jarak_tempuh',
    'waktu_kunjungan','jumlah_pengunjung','popularitas','max_tampung','luas_tempat_wisata','wahana','protokol_covid','foto','deskripsi','sumber_data','skala_harga_tiket','skala_kebersihan','skala_jarak_tempuh','skala_waktu_kunjungan','skala_jumlah_pengunjung','skala_popularitas'];
}
