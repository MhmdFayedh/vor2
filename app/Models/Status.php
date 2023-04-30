<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function request()
    {
        return $this->belongsTo(opportunity::class);
    }

    public function getNameAttribute($name)
    {
        if($name === 'pending'){
            return 'قيد الانتظار';
        } else if($name === 'accepted'){
            return 'مقبولة';
        } else if($name === 'rejected') {
            return 'مرفوضة';
        }
        
        return $name;

    }
}
