<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_pengumuman';
    protected $fillable=[
        'name', 'user_id'
    ];
    protected $casts=[

    ];
}
