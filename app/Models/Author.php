<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $primaryKey = 'author_id';
    protected $table = 'author';
    protected $fillable = ['first_name', 'last_name'];
}
