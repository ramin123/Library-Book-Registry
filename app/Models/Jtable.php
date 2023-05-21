<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jtable extends Model
{
    protected $table = 'datatables';
    protected $fillable = [];
    protected $guarded = ['id'];
}
