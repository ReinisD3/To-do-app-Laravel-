<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title','category_id','user_id'];
    protected $guarded = ['id'];

    protected $with = ['user','category'];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
