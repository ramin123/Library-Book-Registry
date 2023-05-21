<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'books';
    protected $fillable = ['title','publication_year','type','author_id','genre_id'];
}
