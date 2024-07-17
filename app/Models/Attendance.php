<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable =[
        'prajurit_id',
        'date',
        'time_in',
        'time_out',
        'latlon_in',
        'latlon_out',
    ];

    public function prajurit(){
        return $this->belongsTo(prajurit::class);
    }
}
