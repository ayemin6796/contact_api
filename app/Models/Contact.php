<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $fillable = ["id", "name", "country_code", "phone_number", "user_id", "is_favorite"];
    use HasFactory, SoftDeletes;

    public function favorite()
    {
        return $this->belongsToMany(User::class, 'favorites', 'contact_id', 'user_id');
    }
}
