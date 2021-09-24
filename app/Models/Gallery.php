<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'iamges',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public static function search_by_title($term = null)
    {
        $query = self::query();

        if($term) { 
            $query->whereHas('user', function($query) use ($term) 
            { $query->where('title', 'like', '%'.$term.'%') 
                ->orWhere('description', 'like', '%'.$term.'%')
                ->orWhere('firstName', 'like', '%'.$term.'%')
                ->orWhere('lastName', 'like', '%'.$term.'%'); });
        }
        return $query;
    }
}
