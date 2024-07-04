<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;
    protected $fillable=[
        'meja_id','no_reservasi','menu_id','jumlah','nama','no_telpon','tanggal_reservasi'];

      
        public function meja()
        {
            return $this->belongsTo(Meja::class, 'meja_id');
            //return $this->belongsTo(Nama_Model::class,'fakultas_id');
            //1 prodi 1 fakultas belongsTo()
            //1 fakultas > 1 prodi hasMany()
        }

        public function menu()
        {
            return $this->belongsTo(Menu::class, 'menu_id');
            //return $this->belongsTo(Nama_Model::class,'fakultas_id');
            //1 prodi 1 fakultas belongsTo()
            //1 fakultas > 1 prodi hasMany()
        }
}
