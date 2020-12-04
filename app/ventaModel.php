<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ventaModel extends Model
{
    protected $table = 'venta_table';
    public $timestamps = false;
    use SoftDeletes;
}
