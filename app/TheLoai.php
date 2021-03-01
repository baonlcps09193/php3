<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table='theloai';

    protected $primaryKey='idTL';

    protected $fillable = [
            'TenTL',
            'ThuTu',
            'AnHien',
            'lang',
            'HienMenu'
        ];
}
