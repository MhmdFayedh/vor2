<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];
    use HasFactory;

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // public function facility()
    // {
    //     return $this->hasOne(Facility::class);
    // }

    // public function schedule()
    // {
    //     return $this->hasOne(Schedule::class);
    // }

    // public function status()
    // {
    //     return $this->hasOne(Status::class);
    // }

    public function getClassificationAttribute($classification)
    {
        if($classification === 'opportunity') {
            return 'فرصة تطوعية';
        } else if ($classification === 'initiative') {
            return 'مبادرة تطوعية';
        } 

        return 'غير مُعرف';
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['classification'] ?? false,  fn($query, $classification) =>
            $query
                ->where('classification' , $classification)
        );
        
    }
}
