<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pengumuman;

class pengumuman extends Model
{
    protected $table='pengumuman';
    protected $fillable=[
        'judul','isi','name', 'user_id','kategori_pengumuman_id'
    ];
    protected $casts=[

    ];
}
