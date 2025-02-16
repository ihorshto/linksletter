<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $fillable = ['title', 'url', 'description', 'position', 'user_id', 'issue_id'];

    public function issues(): HasOne
    {
        return $this->HasOne(Issue::class);
    }
}
