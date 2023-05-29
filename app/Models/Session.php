<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable=[
        'start_date',
        'end_date',
        'amount',
        'formation_id',
        'promotion',
        'status',

    ];

    public function services()
    {
        return $this->belongsToMany(Service::class,'services_sessions','session_id','service_id');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

}
