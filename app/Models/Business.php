<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
      'business_name',
      'business_logo'
    ];


    public function users() {
      return $this->hasMany(\App\Models\User::class, 'business_id');
    }
}
