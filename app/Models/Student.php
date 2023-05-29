<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

        protected $fillable=[
            'first_name_ar',
            'first_name_fr',
            'last_name_ar',
            'last_name_fr',
            'cin',
            'email',
            'img',
            'telephone1',
            'telephone2',
        ];
}
