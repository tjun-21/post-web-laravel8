<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //membuat field yang boleh di isi melalui method create
    // protected $fillable = ['title', 'excerpt', 'body'];

    //membuat field tidak boleh di isi untuk menggunakan method create
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
