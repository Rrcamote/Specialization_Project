<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
         'name', 'scheduled_date', 'hours', 'status'
    ];

    public function massage()
    {
       return $this->belongsTo(Massage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
