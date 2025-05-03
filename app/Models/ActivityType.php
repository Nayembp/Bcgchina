<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    protected $fillable = [
        'activity_type'
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'type_id');
    }
}