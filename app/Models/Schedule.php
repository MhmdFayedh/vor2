<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    protected $guarded = [];
    
    use HasFactory;

    public function request()
    {
        return $this->belongsTo(opportunity::class);
    }
}
