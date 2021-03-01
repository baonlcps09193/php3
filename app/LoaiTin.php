<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $primaryKey = 'idLT';

    protected $table = 'loaitin';

    protected $fillable = ['lang', 'Ten', 'ThuTu', 'AnHien'];

    public $timestamps = false;
}
