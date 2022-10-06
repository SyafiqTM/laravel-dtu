<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'text'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function get_timestamp(){
        return $this->created_at;
    }
}
