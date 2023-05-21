<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'authors';
    protected $fillable = ['name'];
}
