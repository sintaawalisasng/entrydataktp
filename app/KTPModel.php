<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KTPModel extends Model
{
    protected $table = 'dataktp';
    protected $fillable = ['nama_provinsi', 'nama_kabkota', 'NIK', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'agama', 'status_perkawinan', 'pekerjaan'];
}
