<?php

namespace App;

use App\Author;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table   = 'books';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function author () {
        return $this->belongsTo(Author::class, 'id_author');
    }
}
