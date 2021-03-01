<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    protected $table = 'tin';

    protected $fillable = ['TieuDe', 'TomTat', 'Content', 'AnHien', 'lang', 'urlHinh'];

    public $timestamps = false;
}
