<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = "registrations";

    protected $fillable = [
        'phone',
        'email',
        'title',
        'message',
        'priority',
    ];

    protected $attributes = [
        'priority' => 'low'
    ];
}
