<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class insumosModel extends Model
{
    protected $table = 'insumos_table';
    public $timestamps = false;
    use SoftDeletes;
}
