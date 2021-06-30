<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    // Used to mass-assign data
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function visits() {
        return $this->hasMany(Visits::class);
    }

    public function latest_visit() {
        return $this->hasOne(Visit::class)->latest();
    }
}
