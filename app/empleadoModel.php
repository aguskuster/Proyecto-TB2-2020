<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class empleadoModel extends Model
{
    protected $table = 'empleado_table';
    public $timestamps = false;
    use SoftDeletes;
}
