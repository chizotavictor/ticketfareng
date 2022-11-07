<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
      'record_code', 'title', 'organizer_id', 'type', 'category', 'tags', 'location_type', 'venue_address',
      'event_timing_type', 'start_date', 'start_time', 'end_date', 'end_time', 'display_start_time', 'display_end_time',
      'created_by', 'published', 'status'
    ];

    public function organizer() {
      return $this->belongsTo(\App\Models\Organizer::class, 'organizer_id');
    }

    public function createdBy() {
      return $this->belongsTo(\App\Models\User::class, 'created_by');
    } 
}
