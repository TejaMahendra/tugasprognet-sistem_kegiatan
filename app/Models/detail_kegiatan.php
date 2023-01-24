<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_kegiatan extends Model
{
    use HasFactory;
    protected $table = 'db_detail_kegiatan';

    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class, 'id_tanggal');
    }
}
