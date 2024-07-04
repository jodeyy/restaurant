<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomor_meja','kuantitas_kursi','jenis_meja','status_meja'
    ];
}
