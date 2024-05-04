<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model {
    protected $table = 'pasien';
    protected $fillable = [
        'Nama', 'NIK', 'Nomor_BPJS', 'Jenis_Kelamin', 'No_Telepon', 'Alamat', 'Tanggal_Lahir'
    ];
}
