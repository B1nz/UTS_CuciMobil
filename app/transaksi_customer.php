<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_customer extends Model
{
    protected $table = 'transaksi_customer';
    protected $fillable = ['plat_nomor', 'nama_mobil', 'warna_mobil', 'jenis_pelayanan', 'uang_bayar', 'keterangan'];
}
