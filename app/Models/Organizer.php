<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'record_code', 'profile_image', 'website', 'bio', 'description', 'facebook_id', 'twitter_id', 'created_by'
    ];

    public function createdBy() {
      return $this->belongsTo(\App\Models\User::class, 'created_by');
    }
}
