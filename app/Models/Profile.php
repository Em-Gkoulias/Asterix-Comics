<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
       if ($this->image) 
       {
           return '/storage/' . $this->image;
       }
       else
       {
           return '/storage/uploads/rDqPxPl4QDUvHMelEw9jGYBgpYm6l46WfhBGmvfe.jpg';
       }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
