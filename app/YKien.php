<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YKien extends Model
{
    protected $table = 'ykien';

    protected $primaryKey = 'idYKien';

    protected $fillable = ['lang', 'Ten', 'ThuTu', 'AnHien'];

    public $timestamps = false;
}
