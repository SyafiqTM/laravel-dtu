<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'tags_id',
        'title' ,
        'slug',
        'content',
        'author',
        'pic_id',
    ];

    public function getTagsAttribute()
    {
        $tags = explode(',', $this->tags_id);

        $string = '';
        foreach ($tags as $key => $tag) {
            $string .= '<span class="badge bg-secondary">' . Tags::find((int)$tag)->title . '</span>' .' ';
        }

        return $string;
    }
}
