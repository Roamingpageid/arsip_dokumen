<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    // app/Models/Document.php
protected $fillable = [
    'user_id',
    'title',
    'description',
    'original_filename',
    'storage_path',
    'file_type',
    'file_size',
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
