<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable =[
        'prajurit_id',
        'date_permission',
        'reason',
        'image',
        'is_approved',
    ];
    public function prajurit(){
        return $this->belongsTo(prajurit::class);
    }
}
