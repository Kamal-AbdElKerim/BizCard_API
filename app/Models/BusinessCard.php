<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCard extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company', 'title', 'user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
