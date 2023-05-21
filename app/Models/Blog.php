<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    use Sluggable;
    use SluggableScopeHelpers;
    use Taggable;

    protected $dates = ['deleted_at'];

    protected $table = 'blogs';

    protected $guarded = ['id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getBlogcategoryAttribute()
    {
        return $this->category->pluck('id');
    }
}
