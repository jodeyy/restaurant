<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $fillable=[
        'reservasi_id','meja_id','metode','total'];

        public function reservasi()
        {
            return $this->belongsTo(Reservasi::class, 'reservasi_id');
            //return $this->belongsTo(Nama_Model::class,'fakultas_id');
            //1 prodi 1 fakultas belongsTo()
            //1 fakultas > 1 prodi hasMany()
        }
        public function meja()
        {
            return $this->belongsTo(Meja::class, 'meja_id');
            //return $this->belongsTo(Nama_Model::class,'fakultas_id');
            //1 prodi 1 fakultas belongsTo()
            //1 fakultas > 1 prodi hasMany()
        }
}
