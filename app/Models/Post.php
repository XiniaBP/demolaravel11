<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function like()
{
    $this->likes()->create([
        'user_id' => auth()->id(),
    ]);
}

public function likes()
{
    return $this->morphMany(Like::class, 'likeable');
}


}
