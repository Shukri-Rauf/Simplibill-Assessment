<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status'
    ];

    protected $attributes = [
        'status' => 'pending' // Default status is 'pending'
    ];

    //return approved posts only
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    //returns pending posts
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}
