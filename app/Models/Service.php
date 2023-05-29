<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        'title_ar',
        'title_fr',
        'description_ar',
        'description_fr',
        'status',
        'montant',
    ];

    public function sessions()
    {
        return $this->belongsToMany(Session::class,'services_sessions','service_id','session_id');
    }
}
